<h2>Exercício 2</h2>
<p>Recuperar os dados de entrada
    que são enviados
    para o PHP para processarmos
    os cálculos matemáticos</p>
<?php
//$_GET
//$_POST
?>
<form method="GET" action="../exercicio-3/file.php">
    <label>Valor 1</label>
    <br>
    <input name="valor-1" type="text"/>
    <br>
    <label>Operação</label>
    <br>
    <select name="operador">
        <option></option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">x</option>
        <option value="/">/</option>
    </select>
    <br>
    <label>Valor 2</label>
    <br>
    <input name="valor-2" type="text"/>
    <hr>
    <input type="submit" value="Calcular"/>
</form>
<?php

echo '<pre>';
//var_dump($_GET);
//var_dump($_POST);

//$valor1 = $_GET['valor-1'];
//$operador = $_GET['operador'];
//$valor2 = $_GET['valor-2'];
//
//var_dump($valor1);
//var_dump($operador);
//var_dump($valor2);
