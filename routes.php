<?php

self::$router->get('/exercicio/:exercicio', function($exercicio) {
    $exercicio = __APP_ROOT__ . '/exercicio-' . $exercicio . '/' . 'get.php';
    if (file_exists($exercicio)) {
        require_once $exercicio;
    }
});

self::$router->post('/exercicio/:exercicio', function($exercicio) {

    $controller = new \Fagoc\Controller\UsuarioController();

    $controller->salvar(new \Fagoc\Core\Input());
});
