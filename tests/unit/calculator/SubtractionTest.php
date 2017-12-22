<?php

namespace tests\unit\calculator;

use PHPUnit\Framework\TestCase;
use App\Calculator\Subtraction;

class SubtractionTest extends TestCase
{
    /** @test */
    public function subtract_given_operands()
    {
        $subtraction = new Subtraction;
        $subtraction->setOperands([10, 6]);

        $this->assertEquals(4, $subtraction->calculate());
    }

    /** @test */
    public function subtract_multiple_operands()
    {
        $subtraction = new Subtraction;
        $subtraction->setOperands([12, 4, 1]);

        $this->assertEquals(7, $subtraction->calculate());
    }
}
