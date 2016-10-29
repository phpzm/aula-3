<?php

function get($index) {
    $value = null;
    if (isset($_GET[$index])) {
        $value = $_GET[$index];
    }
    return  $value;
}

function post($index) {
    $value = null;
    if (isset($_POST[$index])) {
        $value = $_POST[$index];
    }
    return  $value;
}

function route($path, $print = true)
{
    $route = '//' . \Fagoc\Core\App::router()->getUrl() . '/' . $path;
    if ($print) {
        echo $route;
    }
    return $route;
}

function out($value, $index = null)
{
    if ($index) {
        if (is_array($value)) {
            $value = isset($value[$index]) ? $value[$index] : '';
        } else if (is_object($value)) {
            $value = isset($value->$index) ? $value->$index : '';
        }
    }
    if (gettype($value) !== 'string') {
        $value = json_encode($value);
    }
    echo $value;
}
