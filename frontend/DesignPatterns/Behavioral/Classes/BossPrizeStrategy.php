<?php

namespace frontend\DesignPatterns\Behavioral\Classes;

use frontend\DesignPatterns\Behavioral\Interfaces\PrizeStrategyInterface;

class BossPrizeStrategy implements PrizeStrategyInterface
{

    public function calculate(int $daysWorked): float
    {
        return $daysWorked * 10 + 1_000_000;
    }
}