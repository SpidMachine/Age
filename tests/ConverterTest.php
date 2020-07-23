<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Str;

class ConverterTest extends TestCase
{
    function testOption(): void
    {
        $str = new Str();

        $this->assertEquals(
            true,
            $str->compare("abc", "abc")
        );

        $this->assertIsBool(
            $str->compare("1", "1")
        );
    }

    public function testLen(): void
    {
        $str = new Str();

        $this->assertEquals(
            6,
            $str->len('Привет')
        );

    }
}