<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Classes\Bootstrap;

use App\DesignPatterns\Creational\AbstractFactory\Interfaces\CheckboxInterface;

class CheckboxBootstrap implements CheckboxInterface
{
    public function draw(): string
    {
        return __CLASS__;
    }
}
