<?php


if (!function_exists('path')) {
    function path() {
        return __APP_ROOT__ . '/' . implode('/', func_get_args());
    }
}

if (!function_exists('out')) {
    function out($text, $html = null) {
        $break = '';
        if (!is_null($html)) {
            $break = $html ? '<br>' : PHP_EOL;
        }
        echo $text, $break;
    }
}

if (!function_exists('get')) {
    function get($index) {
        return isset($_GET[$index]) ? $_GET[$index] : null;
    }
}

if (!function_exists('post')) {
    function post($index) {
        return isset($_POST[$index]) ? $_POST[$index] : null;
    }
}
