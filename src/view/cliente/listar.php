<?php

if (!isset($lista)) {
    $lista = [];
}
?>
<div class="section">

    <a class="button is-primary" href="<?php route('cliente/novo'); ?>">Novo</a>
    <table class="table">
        <tr>
              <th>Opções</th>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Data Nascimento</th>
              <th>Legal</th>
          </tr>
          <?php
            foreach ($lista as $key => $value) {
                ?>
                    <tr>
                        <td>
                            <a href="<?php route('cliente/' . (isset($value->email) ? $value->email : '') ); ?>" class="button is-success">Editar</a>
                        </td>
                        <td><?php out($value, 'nome'); ?></td>
                        <td><?php out($value, 'email'); ?></td>
                        <td><?php out($value, 'data_nascimento'); ?></td>
                        <td><?php out($value, 'question'); ?></td>
                    </tr>
                <?php
            }
          ?>
    </table>
    <a class="button is-primary" href="<?php route('cliente/novo'); ?>">Novo</a>

</div>
