<?php

namespace DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi;

use DesignPatterns\Creational\AbstractFactory\Interfaces\CheckboxInterface;

class CheckboxSemanticUi implements CheckboxInterface
{
    public function draw(): string
    {
        return __CLASS__;
    }
}
