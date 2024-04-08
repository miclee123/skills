<?php

namespace frontend\DesignPatterns\Creational\AbstractFactory\Classes\Bootstrap;

use frontend\DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;

class ButtonBootstrap implements ButtonInterface
{

    public function draw(): string
    {
        return __CLASS__;
    }
}
