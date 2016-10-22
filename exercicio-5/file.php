<h2>Exercício 5</h2>
<p>Criar funções para realizar as operações matemáticas disponíveis</p>
<?php
//function
require '../vendor/autoload.php';

use Fagoc\Calculadora;

$action = get('action');

switch ($action) {

    case 'calcular'://comportamento do arquivo

        $valor1 = post('valor-1');
        $valor2 = post('valor-2');
        $operador = post('operador');
        if ($valor1 && $valor2 && $operador) {

            $calculadora = new Calculadora('William');//valor no construtor
            $resultado = $calculadora->calcular($valor1[0], $valor2[0], $operador[0]);
            $calculadora->modo = 'Científica';//atribuicao dinâmica
            echo "<h3>Resultado</h3>";
            echo "<table border=1>" .
                    "<tr>" .
                        "<th>Dono</th>" .
                        "<th>Modo</th>" .
                        "<th>Saída</th>" .
                    "</tr>" .
                    "<tr>" .
                        "<td>{$calculadora->dono}</td>" .
                        "<td>{$calculadora->modo}</td>" .
                        "<td>{$resultado}</td>" .
                    "</tr>" .
                "</table>";
        }
        echo '<br>';
        echo '<a href="file.php?action=novo"> De novo! De novo! </a>';
        break;
    default://visualização padrão do arquivo
        echo '<form method="POST" action="file.php?action=calcular">';
        require_once __APP_ROOT__ . '/src/view/formulario-operacao.php';
        echo '<br>';
        echo '<input type="submit" value="Calcular"/>';
        echo '</form>';
        break;
}
