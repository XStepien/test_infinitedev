<?php

namespace App;


class Api {

    public $data = [];

    const JSON_URL = "./data.json";

    public function __construct(){
        $this->readJson();
    }

    private function readJson(){
        $str = file_get_contents('data.json');
        $json = json_decode($str, true);

        $this->data = $json;
    }

    public function getData($type, $id=null)
    {
        $tmpdata = $this->data[$type];

        $max = null;
        if(isset($_GET['max'])) {
            $max = $_GET['max'];
        }

        $start = 0;
        if(isset($_GET['start'])) {
            $start = $_GET['start'];
        }

        if(isset($id) && array_key_exists($id, $tmpdata)) {
            $this->data = $tmpdata[intval($id)];
        } elseif(isset($max)) {
            $this->data = array_slice($tmpdata, $start, $max);
        } else {
            $this->data = $tmpdata;
        }

        header('Content-Type: application/json');
        echo json_encode($this->data);
    }
}
?>