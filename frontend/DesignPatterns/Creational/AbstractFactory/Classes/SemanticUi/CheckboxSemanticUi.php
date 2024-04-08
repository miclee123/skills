<?php

namespace frontend\DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi;

use frontend\DesignPatterns\Creational\AbstractFactory\Interfaces\CheckboxInterface;

class CheckboxSemanticUi implements CheckboxInterface
{
    public function draw(): string
    {
        return __CLASS__;
    }
}
