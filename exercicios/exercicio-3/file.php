<h2>Exercício 3</h2>
<p>Utilizar as estrutura de controle de 
    fluxo do PHP para organizar os 
    cálculos que serão feitos e 
    preparar a interface para "voltar" 
    para a tela anterior</p>
<?php
//switch
//if
//<a>

$valor1 = $_GET['valor-1'];
$operador = $_GET['operador'];
$valor2 = $_GET['valor-2'];

$resultado = calcular($valor1, $valor2, $operador);

var_dump($resultado);

function calcular($valor1, $valor2, $operador)
{
    $resultado = 0;
    
    if ($operador === '+') {
        $resultado = $valor1 + $valor2;
    } else {
        $resultado = $valor1 - $valor2;
    }
    
    return $resultado;
}