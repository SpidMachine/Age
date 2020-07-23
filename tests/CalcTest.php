<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Calc;

class CalcTest extends TestCase
{
    public function testSum()
    {
        $calc = new Calc();

        $this->assertEquals(
            10,
            $calc->sum(5, 5)
        );
    }

    public function testDif()
    {
        $calc = new Calc();

        $this->assertEquals(
            0,
            $calc->dif(5, 5)
        );
    }

    public function testDiv()
    {
        $calc = new Calc();

        $this->assertIsFloat(
            $calc->div(5, 5)
        );

        $this->assertEquals(
            1,
            $calc->div(5, 5)
        );
    }

    public function testMul(): void
    {
        $calc = new Calc();

        $this->assertIsInt(
            $calc->mul(5, 5)
        );

        $this->assertEquals(
            25,
            $calc->mul(5, 5)
        );
    }
}
