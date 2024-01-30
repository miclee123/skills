<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi;

use App\DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;

class ButtonSemanticUi implements ButtonInterface
{
    public function draw(): string
    {
        return __CLASS__;
    }
}
