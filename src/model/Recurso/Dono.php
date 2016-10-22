<?php

namespace Fagoc\Recurso;

class Dono {

    public $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function __toString()
    {
        return $this->nome;
    }
}
