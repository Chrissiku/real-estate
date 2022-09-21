<?php
namespace App\Helpers;

class GlobalHelpers
{
    public static function redirect(string $page)
    {
        $ROOT_PATH = dirname(__DIR__);
        header("Location: {$ROOT_PATH}/views/{$page}.php");
    }
}