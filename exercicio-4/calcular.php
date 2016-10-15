Calculando
<pre>
<?php

require '../bootstrap.php';

require __APP_ROOT__ . '/src/model/Calculadora.php';

$operadores = post('operador');
$valores_1 = post('valor-1');
$valores_2 = post('valor-2');

$calculadora = new Calculadora();

foreach ($operadores as $index => $operador) {
    $valor_1 = null;
    $valor_2 = null;
    $resultado = 0;
    if (isset($valores_1[$index])) {
        $valor_1 = (int) $valores_1[$index];
    }
    if (isset($valores_2[$index])) {
        $valor_2 = (int) $valores_2[$index];
    }
    if (isset($valor_1) and isset($valor_2)) {
        $resultado = $calculadora->calcular($valor_1, $valor_2, $operador);
    }
    var_dump($resultado);
}

//end
