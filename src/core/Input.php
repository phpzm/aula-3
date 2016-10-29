<?php

namespace Fagoc\Core;

class Input
{
    private $inputs = '';

    public function __construct()
    {
        $this->inputs['get'] = $_GET;
        $this->inputs['post'] = $_POST;
    }

    public function __call($name, $arguments)
    {
        $name = strtolower($name);
        if (isset($this->inputs[$name])) {
            $verb = $this->inputs[$name];
        }
        if (isset($verb) && isset($verb[$arguments[0]])) {
            return $verb[$arguments[0]];
        }
        return null;
    }
}
