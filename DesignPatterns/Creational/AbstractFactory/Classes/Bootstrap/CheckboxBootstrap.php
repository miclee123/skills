<?php

namespace DesignPatterns\Creational\AbstractFactory\Classes\Bootstrap;

use DesignPatterns\Creational\AbstractFactory\Interfaces\CheckboxInterface;

class CheckboxBootstrap implements CheckboxInterface
{
    public function draw(): string
    {
        return __CLASS__;
    }
}
