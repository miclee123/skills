<?php

namespace DesignPatterns\Behavioral\Classes;

use DesignPatterns\Behavioral\Interfaces\PrizeStrategyInterface;

class OfficeEmployeePrizeStrategy implements PrizeStrategyInterface
{

    public function calculate(int $daysWorked): float
    {
        return $daysWorked * 5 + 1_000;
    }
}