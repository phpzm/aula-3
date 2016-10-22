<?php

define('__APP_ROOT__', __DIR__);

require_once 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Meu Curso Legal</title>
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
