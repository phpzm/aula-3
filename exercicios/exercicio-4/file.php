<h2>Exercício 4</h2>
<p>Permitir informar até 5 operações para serem realizadas por vez, exibindo o resultado de todas elas de cada operação baseado no operador de junção das operações</p>
<?php

require '../bootstrap.php';

//for,while
//if
//math
echo '<form method="POST" action="calcular.php">';
for ($i = 0; $i < 5; $i++) {
    $path = __APP_ROOT__ . '/src/view/formulario-operacao.php';
    require $path;
    echo '<hr>';
}
echo '<input type="submit" value="Calcular"/>';
echo '</form>';


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
