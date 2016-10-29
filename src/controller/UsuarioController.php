<?php

namespace Fagoc\Controller;

use Fagoc\Core\Input;
use Fagoc\Usuario;

class UsuarioController
{
    public function salvar(Input $input)
    {
        $model = new Usuario();

        $model->create([
            'nome' => $input->post('nome'),
            'email' => $input->post('email'),
            'data_nascimento' => $input->post('data_nascimento'),
            'observacao' => $input->post('observacao'),
            'question' => $input->post('question'),
        ]);
        ?>
            <div class="section">
                <div>
                    Registo salvo com sucesso!
                </div>
                <div>
                    <a class="button" href="<?php route('exercicio/6'); ?>">
                        Voltar
                    </a>
                </div>
            </div>
        <?php
    }
}
