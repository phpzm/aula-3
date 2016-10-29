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

self::$router->get('/cliente/novo', function() {
    $exercicio = __APP_ROOT__ . '/src/view/cliente/novo.php';
    if (file_exists($exercicio)) {
      require_once $exercicio;
    }
});

self::$router->post('/cliente/salvar', function() {

    $controller = new \Fagoc\Controller\ClienteController();

    $controller->salvar(new \Fagoc\Core\Input());
});

self::$router->get('/cliente/listagem', function() {

    $controller = new \Fagoc\Controller\ClienteController();

    $controller->listar(new \Fagoc\Core\Input());
});

self::$router->get('/cliente/:id', function($id) {
    echo $id;
});

/*space*/
