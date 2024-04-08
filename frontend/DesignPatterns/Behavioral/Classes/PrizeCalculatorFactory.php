<?php

namespace frontend\DesignPatterns\Behavioral\Classes;

use frontend\DesignPatterns\Behavioral\Interfaces\PrizeStrategyInterface;

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