<?php

namespace App;


class Asset
{
    public static $json = null;

    public static function path($file)
    {
        $parts = explode('.', $file);
        if (self::isLocal()) {
            if ($parts[1] === 'css') {
                return;
            }

            return 'http://localhost:3003/public/'.$file;
        }
        if (! self::$json) {
            self::$json = json_decode(file_get_contents('./public/assets.json'));
        }

        return self::$json->{$parts[0]}->{$parts[1]};
    }

    public static function isLocal()
    {
        return false;
        return strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;
    }
}