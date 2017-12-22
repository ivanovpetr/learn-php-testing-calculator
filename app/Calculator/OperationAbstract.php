<?php
/**
 * Created by PhpStorm.
 * User: Petr
 * Date: 22.12.2017
 * Time: 23:30
 */

namespace App\Calculator;


abstract class OperationAbstract
{
    protected $operands = [];

    public function setOperands(array $operands)
    {
        $this->operands = $operands;
    }
}