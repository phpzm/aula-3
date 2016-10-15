<?php

require_once 'vendor/autoload.php';

$exercise = get('exercicio');
if (!$exercise) {
    $exercise = get('e');
}

$file = path($exercise, 'file.php');

$title = 'Aula 3';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php out($title); ?></title>
    </head>
    <body>
        <?php
            if (file_exists($file)) {
                require_once $file;
            } else {
                out('Exercício não encontrado!');
            }
        ?>
    </body>
</html>
