<?php

// scoper-composer-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/composer-autoload.php';

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('database_read')) {
    function database_read() {
        return \_PhpScoper5ce26f1fe2920\database_read(...func_get_args());
    }
}
if (!function_exists('database_write')) {
    function database_write() {
        return \_PhpScoper5ce26f1fe2920\database_write(...func_get_args());
    }
}
if (!function_exists('printOrders')) {
    function printOrders() {
        return \_PhpScoper5ce26f1fe2920\printOrders(...func_get_args());
    }
}
if (!function_exists('composerRequireb8e93f093dda8bae9cb1be42d9b20dd3')) {
    function composerRequireb8e93f093dda8bae9cb1be42d9b20dd3() {
        return \_PhpScoper5ce26f1fe2920\composerRequireb8e93f093dda8bae9cb1be42d9b20dd3(...func_get_args());
    }
}
if (!function_exists('getallheaders')) {
    function getallheaders() {
        return \_PhpScoper5ce26f1fe2920\getallheaders(...func_get_args());
    }
}

return $loader;
