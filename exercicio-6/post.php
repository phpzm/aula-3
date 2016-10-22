<?php

use Fagoc\Calculadora;

$valor1 = post('valor1');
$valor2 = post('valor2');
$operador = post('operador');

$calculadora = new Calculadora('William');

$resultado = $calculadora->calcular($valor1, $valor2, $operador);

var_dump($resultado);
