<?php

class Calculadora {

    public function calcular($valor1, $valor2, $operador)
    {
        $resultado = 0;
        switch ($operador) {
            case '+':
                $resultado = $this->somar($valor1, $valor2);
                break;
            case '-':
                $resultado = $this->subtrair($valor1, $valor2);
                break;
            case '*':
                $resultado = $this->multiplicar($valor1, $valor2);
                break;
            case '/':
                $resultado = $this->dividir($valor1, $valor2);
                break;
        }
        return $resultado;
    }

    public function somar($valor1, $valor2)
    {
        return $valor1 + $valor2;
    }

    public function subtrair($valor1, $valor2)
    {
        return $valor1 - $valor2;
    }

    public function multiplicar($valor1, $valor2)
    {
        return $valor1 * $valor2;
    }

    public function dividir($valor1, $valor2)
    {
        return $valor1 / $valor2;
    }
}
