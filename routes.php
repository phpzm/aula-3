<?php

$router->get('/exercicio/:exercicio', function($exercicio) {
    $exercicio = __DIR__ . '/exercicio-' . $exercicio . '/' . 'get.php';
    if (file_exists($exercicio)) {
        require_once $exercicio;
    }
});

$router->post('/exercicio/:exercicio', function($exercicio) {
    $exercicio = __DIR__ . '/exercicio-' . $exercicio . '/' . 'post.php';
    if (file_exists($exercicio)) {
        require_once $exercicio;
    }
});
