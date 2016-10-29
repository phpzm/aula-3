<?php

self::$router->get('exercicio/:exercicio', function($exercicio) {
    var_dump('routes.php');
    $exercicio = __APP_ROOT__ . '/exercicio-' . $exercicio . '/' . 'get.php';
    if (file_exists($exercicio)) {
        require_once $exercicio;
    }
});

self::$router->post('exercicio/:exercicio', function($exercicio) {
    $exercicio = __APP_ROOT__ . '/exercicio-' . $exercicio . '/' . 'post.php';
    if (file_exists($exercicio)) {
        require_once $exercicio;
    }
});
