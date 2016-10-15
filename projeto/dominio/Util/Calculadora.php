<?php

namespace Fagoc\Util;

/**
 * class Calculadora
 */
class Calculadora {

    /**
     * @param $valor1
     * @param $valor2
     * @param $operador
     * @return float
     */
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

    /**
     * @param $valor1
     * @param $valor2
     * @return float
     */
    public function somar($valor1, $valor2)
    {
        return $valor1 + $valor2;
    }

    /**
     * @param $valor1
     * @param $valor2
     * @return float
     */
    public function subtrair($valor1, $valor2)
    {
        return $valor1 - $valor2;
    }

    /**
     * @param $valor1
     * @param $valor2
     * @return float
     */
    public function multiplicar($valor1, $valor2)
    {
        return $valor1 * $valor2;
    }

    /**
     * @param $valor1
     * @param $valor2
     * @return float
     */
    public function dividir($valor1, $valor2)
    {
        return $valor1 / $valor2;
    }
}
