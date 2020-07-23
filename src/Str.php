<?php

namespace App;

class Str
{
    public function compare($st1, $st2)
    {
        return $st1 === $st2;
    }

    public function len(string $str): int
    {
        return iconv_strlen($str);
    }
}
