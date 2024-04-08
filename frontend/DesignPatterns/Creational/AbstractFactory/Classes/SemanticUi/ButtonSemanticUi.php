<?php

namespace frontend\DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi;

use frontend\DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;

class ButtonSemanticUi implements ButtonInterface
{
    public function draw(): string
    {
        return __CLASS__;
    }
}
