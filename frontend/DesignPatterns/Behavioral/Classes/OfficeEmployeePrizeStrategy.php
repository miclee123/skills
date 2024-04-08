<?php

namespace frontend\DesignPatterns\Behavioral\Classes;

use frontend\DesignPatterns\Behavioral\Interfaces\PrizeStrategyInterface;

class OfficeEmployeePrizeStrategy implements PrizeStrategyInterface
{

    public function calculate(int $daysWorked): float
    {
        return $daysWorked * 5 + 1_000;
    }
}