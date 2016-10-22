<?php

namespace Fagoc;

use Fagoc\Recurso\Dono;

/**
 * class Calculadora
 */
class Calculadora {

    public $dono;
    private $atributos = [];

    public function __construct($dono)
    {
        $this->dono = new Dono($dono);
    }

    public function __set($name, $value)
    {
        $this->atributos[$name] = $value;
    }

    public function __get($name)
    {
        return isset($this->atributos[$name]) ? $this->atributos[$name] : null;
    }

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
