<?php
namespace App\Helpers;

class GlobalHelpers
{
    public static function redirect(string $page)
    {
        header('Location: ' . $page . '.php');
    }
}