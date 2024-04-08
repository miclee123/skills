<?php

namespace frontend\DesignPatterns\Creational\AbstractFactory\Classes\Bootstrap;

use frontend\DesignPatterns\Creational\AbstractFactory\Interfaces\CheckboxInterface;

class CheckboxBootstrap implements CheckboxInterface
{
    public function draw(): string
    {
        return __CLASS__;
    }
}
