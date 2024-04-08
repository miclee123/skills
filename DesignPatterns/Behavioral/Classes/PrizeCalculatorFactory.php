<?php

namespace DesignPatterns\Behavioral\Classes;

use DesignPatterns\Behavioral\Interfaces\PrizeStrategyInterface;

class PrizeCalculatorFactory
{
    public function getStrategy(Employee $employee): PrizeStrategyInterface
    {
        if ($employee->isBoss()) {
            return new BossPrizeStrategy();
        } else {
            return new OfficeEmployeePrizeStrategy();
        }
    }
}