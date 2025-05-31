<?php

namespace App\Helpers;

use Exception;

class CalculatorHelper
{
    public static function add($a, $b)
    {
        return $a + $b;
    }

    public static function subtract($a, $b)
    {
        return $a - $b;
    }

    public static function perkalian($a, $b)
    {
        return $a * $b;
    }

    public static function pembagian($a, $b)
    {
        if ($b == 0) {
            throw new Exception("Tidak bisa membagi dengan nol.");
        }
        return $a / $b;
    }

    public static function modulus($a, $b)
    {
        return $a % $b;
    }

    public static function pangkat($a, $b)
    {
        return pow($a, $b);
    }

    public static function akar($a)
    {
        if ($a < 0) {
            throw new Exception("Tidak bisa mengambil akar dari bilangan negatif.");
        }
        return sqrt($a);
    }
}