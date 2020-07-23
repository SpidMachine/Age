<?php

namespace App;

class Calc
{
    public function sum($a, $b):int
    {
        return $a + $b;
    }

    public function dif($a, $b): int
    {
        return $a - $b;
    }

    public function div($a, $b): float
    {
        return $a / $b;
    }

    public function mul($a, $b): int
    {
        return $a * $b;
    }
}
