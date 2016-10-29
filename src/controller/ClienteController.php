<?php

namespace Fagoc\Controller;

use Fagoc\Core\Input;
use Fagoc\Cliente;
use \stdClass;

class ClienteController
{
    public function salvar(Input $input)
    {
        $cliente = new Cliente();

        $dto = new stdClass();
        $dto->nome = $input->post('nome');
        $dto->email = $input->post('email');
        $dto->data_nascimento = $input->post('data_nascimento');
        $dto->observacao = $input->post('observacao');
        $dto->question = $input->post('question');

        $salvo = $cliente->create($dto);

        $template = __APP_ROOT__ . '/src/view/cliente/novo.php';
        if ($salvo) {
            $back = 'cliente/listagem';
            $template = __APP_ROOT__ . '/src/view/partials/success.php';
        }

        require_once $template;
    }

    public function listar(Input $input)
    {
        $cliente = new Cliente();

        $lista = $cliente->read();

        $template = __APP_ROOT__ . '/src/view/cliente/listar.php';

        require_once $template;
    }

}
