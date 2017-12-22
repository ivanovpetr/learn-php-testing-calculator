<?php
/**
 * Created by PhpStorm.
 * User: Petr
 * Date: 23.12.2017
 * Time: 0:41
 */

namespace tests\unit\calculator;

use PHPUnit\Framework\TestCase;
use App\Calculator\Multiplication;

class MultiplicationTest extends TestCase
{
    /** @test */
    public function multiply_up_given_operands()
    {
        $multiplication = new Multiplication;
        $multiplication->setOperands([3, 2]);

        $this->assertEquals(6, $multiplication->calculate());
    }

    /** @test */
    public function no_operands_given_throws_exception_when_calculating()
    {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);

        $addition = new Multiplication;
        $addition->calculate();
    }
}
