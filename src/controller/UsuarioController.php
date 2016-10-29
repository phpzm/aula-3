<?php

namespace Fagoc\Controller;

use Fagoc\Core\Input;

class UsuarioController
{
    public function salvar(Input $input)
    {
        var_dump($input);
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
