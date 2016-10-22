<?php

namespace Fagoc\Core;

class Router
{
    private $uri;
    private $method;

    private $routes = [];

    public function __construct($uri = null, $method = 'get')
    {
        if (!is_null($uri)) {
            $this->uri = $uri;
            $this->method = strtoupper($method ? $method : 'get');
            return;
        }

        $this->parseRequest();
    }

    protected function parseRequest()
    {
        $self = isset($_SERVER['PHP_SELF']) ? explode('/', $_SERVER['PHP_SELF']) : [];
        array_pop($self);
        $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
        $start = implode('/', $self);
        $uri = preg_replace('/' . preg_quote($start, '/') . '/', '', $request_uri, 1);

        $this->uri = $uri;
        $this->method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : '';
    }

    public function match() {

		foreach ($this->routes[$this->method] as $pattern => $callback) {
			if (preg_match($pattern, $this->uri, $params)) {
				array_shift($params);
				return call_user_func_array($callback, array_values($params));
			}
		}
	}

    public function __call($name, $arguments)
    {
        $name = strtoupper($name);
        if (isset($this->routes[$name])) {
            $this->routes[$name] = [];
        }
        $peaces = explode('/', $arguments[0]);
        foreach ($peaces as $key => $peace) {
            if (strpos($peace, ':') === 0) {
                $peaces[$key] = '(\w+)';
            }
        }
        $pattern = '/^\/' . str_replace('/', '\/', implode('/', $peaces)) . '$/';
        $this->routes[$name][$pattern] = $arguments[1];
    }
}
