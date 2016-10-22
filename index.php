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
    </head>
    <body>
        <?php
        $exercicio = __DIR__ . '/exercicio-' . get('e') . '/' . 'file.php';
        if (file_exists($exercicio)) {
            require_once $exercicio;
        }
        ?>
    </body>
</html>
