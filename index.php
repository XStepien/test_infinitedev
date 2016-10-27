<?php
require 'vendor/autoload.php';

$asset = new App\Asset();

$router = new App\Router($_GET['url']);
$router->get('/', function(){});
$router->get('/api/:type', function($type){
    $api = new App\Api();
    $api->getData($type);
    exit();
});
$router->get('/api/:type/:id', function($type, $id){
    $api = new App\Api();
    $api->getData($type, $id);
    exit();
});

$router->run();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Test Embauche</title>
    <link href="<?php echo $asset->path('app.css') ?>" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div class="ui container">
            <div class="ui header_topbar">
                <a href="#" class="ui image">
                    <img src="/images/logo.png" alt="logo">
                </a>

                <div class="ui small horizontal list right floated">
                    <div class="item">
                        <i class="large mail outline icon"></i>
                        <div class="middle aligned content">
                            <a href="#">contactez-nous</a>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#" class="ui image"><img src="/images/facebook.jpg" alt=facebook"></a>
                    </div>
                    <div class="item">
                        <a href="#" class="ui image"><img src="/images/linkedin.jpg" alt="linkedin"></a>
                    </div>
                    <div class="item">
                        <a href="#" class="ui image"><img src="/images/twitter.jpg" alt="twitter"></a>
                    </div>
                    <div class="item">
                        <a href="#" class="ui image"><img src="/images/tumblr.jpg" alt="tumblr"></a>
                    </div>
                    <div class="item">
                        <a href="#" class="ui image"><img src="/images/youtube.jpg" alt="youtube"></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="header">
            <nav>
                <div class="ui container">
                    <div class="ui five item menu">
                        <a class="item">étudiant entrepreneur</a>
                        <a class="item">boîte à outils</a>
                        <a class="item">portrait d'étudiants entrepreneurs & mentors</a>
                        <a class="item">à propos</a>
                        <div class="item">
                            <form action="#">
                            <div class="ui icon input">
                                <label class="sr-only">Rechercher</label>
                                <input type="text">
                                <i class="search link icon"></i>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="ui container">
                <h1 class="ui header">le premier site <br><small>des photographes indépendants</small></h1>
            </div>
        </div>
    </header>

    <section id="app">
        <div>
            <article class="ui container">

                <h2><span>à la une</span></h2>

                <item></item>

            </article>
        </div>

        <div>
            <article class="paralax"></article>
        </div>

        <div>
            <article class="ui container">

                <h2><span>actualités</span></h2>

                <items></items>

            </article>
        </div>

        <div class="lee-jeffries">
            <article class="ui container">

                <h2><span>lee jeffries</span></h2>

                <hexagrid></hexagrid>

            </article>
        </div>

        <div class="docu-newsletter">
            <article class="ui container">
                <div class="ui grid">
                    <div class="ten wide column">
                        <h3>documentation</h3>

                        <div class="ui items documentation">
                            <div class="item">
                                <div class="ui tiny image">
                                    <img src="/images/icon-download.png">
                                </div>
                                <div class="middle aligned content">
                                    <a class="header">Téléchargez le dossier de candidature au statut national étudiant entrepreneur</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ui tiny image">
                                    <img src="/images/icon-download.png">
                                </div>
                                <div class="middle aligned content">
                                    <a class="header">Téléchargez le dossier de candidature au prix pépite 2016</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="six wide column">
                        <h3>newsletter</h3>

                        <div class="ui form">
                            <div class="field">
                                <label class="sr-only">EMAIL</label>
                                <input placeholder="EMAIL" type="text">
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    <label class="sr-only">NOM</label>
                                    <input placeholder="NOM" type="text">
                                </div>
                                <div class="field">
                                    <label class="sr-only">PRENOM</label>
                                    <input placeholder="PRENOM" type="text">
                                </div>
                            </div>
                            <button class="btn btn-border-medium primary fluid">S'INSCRIRE</button>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <footer>
        <div class="prefooter">
            <div class="ui container socialmenu">
                <div class="ui five item menu">
                    <a class="item"><i class="bordered facebook f icon"></i><span class="tablet-hide">facebook</span></a>
                    <a class="item"><i class="bordered twitter icon"></i><span class="tablet-hide">Twitter</span></a>
                    <a class="item"><i class="bordered linkedin icon"></i><span class="tablet-hide">linkedin</span></a>
                    <a class="item"><i class="bordered youtube icon"></i><span class="tablet-hide">Youtube</span></a>
                    <a class="item"><i class="bordered tumblr icon"></i><span class="tablet-hide">tumblr</span></a>
                </div>
            </div>
        </div>
        <div class="finalfooter">
            <div class="ui container clearfix">
                <div class="ui grid">
                    <div class="four wide column">
                        <h5>Sountenez <br>la Photo</h5>
                        <a href="#" class="btn btn-border-medium basic fluid">faire un don</a>
                    </div>
                    <div class="four wide column">
                        <h5 class="footer-header">initiative portée par :</h5>
                        <a href="#" class="ui medium image">
                            <img src="http://placehold.it/200x100">
                        </a>
                    </div>
                    <div class="four wide column">
                        <h5 class="footer-header">rubriques</h5>
                        <div class="ui link list">
                            <a class="item">Titre rubrique</a>
                            <a class="item">Boite à outils</a>
                            <a class="item">Portrait blabla</a>
                            <a class="item">à propos</a>
                            <a class="item">mentions légales</a>
                        </div>
                    </div>
                    <div class="four wide column">
                        <h5 class="footer-header">youtube</h5>
                        <div class="ui images">
                            <a href="#" class="ui image">
                                <img src="http://placehold.it/88x88">
                            </a>
                            <a href="#" class="ui image">
                                <img src="http://placehold.it/88x88">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo $asset->path('app.js') ?>" ></script>
</body>
</html>