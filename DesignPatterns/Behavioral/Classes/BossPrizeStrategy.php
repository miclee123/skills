<?php

namespace DesignPatterns\Behavioral\Classes;

use DesignPatterns\Behavioral\Interfaces\PrizeStrategyInterface;

class BossPrizeStrategy implements PrizeStrategyInterface
{

    public function calculate(int $daysWorked): float
    {
        return $daysWorked * 10 + 1_000_000;
    }
}