<?php

define('__APP_ROOT__', __DIR__);

require_once 'vendor/autoload.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Meu Curso Legal</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.min.css" integrity="sha256-F7gqKszCwmz8vhiti+AICU8dLfIEpxzPVihhhGfbbKg=" crossorigin="anonymous" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    </head>
    <body>
        <nav class="nav has-shadow" id="top">
            <div class="container">
              <div class="nav-left">
                <a class="nav-item" href="../index.html">
                  <img src="http://fagoc.br/download/a/logo" alt="Description">
                </a>
              </div>
              <span class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
              </span>
              <div class="nav-right nav-menu">
                <a class="nav-item is-tab is-active">Home</a>
                <a class="nav-item is-tab">Features</a>
                <a class="nav-item is-tab">Team</a>
                <a class="nav-item is-tab">Help</a>
                <span class="nav-item">
                  <a class="button">Log in</a>
                  <a class="button is-success">Sign up</a>
                </span>
              </div>
            </div>
        </nav>

        <section class="section">
            <div class="container content">
                <?php
                    $router = new Fagoc\Core\Router();

                    $router->get('exercicio/:exercicio', function($exercicio) {
                        $exercicio = __DIR__ . '/exercicio-' . $exercicio . '/' . 'file.php';
                        if (file_exists($exercicio)) {
                            require_once $exercicio;
                        }
                    });

                    $router->match();
                ?>
            </div>
        </section>
    </body>
</html>
