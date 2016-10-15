<?php
//http://localhost/aula-3/exercicio-3/B.php

require 'file.php';

$valor1 = '5';
$operador = '+';
$valor2 = '10';

$resultado = calcular($valor1, $valor2, $operador);

var_dump($resultado);