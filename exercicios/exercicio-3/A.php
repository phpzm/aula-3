<?php
//http://localhost/aula-3/exercicio-3/A.php

require 'file.php';

$valor1 = '10';
$operador = '+';
$valor2 = '20';

$resultado = calcular($valor1, $valor2, $operador);

var_dump($resultado);