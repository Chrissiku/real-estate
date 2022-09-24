<?php
namespace App\Helpers;

use Exception;

class URL {

    public static function getIntParam(string $name, ?int $default = null): ?int
    {
        // return the default value if the value of the $_GET[$page] is not set
        if(!isset($_GET[$name])) return $default;

        // do not traite it as an integer, just return 0 and getPositiveInt method will do the remaining job
        if($_GET[$name] === '0') return 0;

        // throw an exception if the value of $_GET[$name] is not an integer
        if(!filter_var($_GET[$name], FILTER_VALIDATE_INT)) {
            throw new Exception("The parameter $name in the URL is not an integer");
        }

        // return the value of the $_GET[$name] by casting it to int
        return (int)$_GET[$name];
    }

    public static function getPositiveInt (string $name, ?int $default = null): int 
    {
        $param = self::getIntParam($name, $default);
        if($param !== null && $param <= 0 ) {
            throw new Exception("The parameter $name in the URL is not an integer");
        }
        return $param;
    }
}