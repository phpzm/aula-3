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
