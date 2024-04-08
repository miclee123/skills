<?php

namespace DesignPatterns\Behavioral\Interfaces;

interface PrizeStrategyInterface
{
    public function calculate(int $daysWorked): float;
}