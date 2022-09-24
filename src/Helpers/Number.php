<?php
namespace App\Helpers;

class Number
{
    public static function priceFormatter(int $price, string $devise = '$')
    {
        return '$'. number_format($price, 0, '', ' ');
    }
}