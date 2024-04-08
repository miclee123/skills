<?php

namespace DesignPatterns\Creational\AbstractFactory\Factories;

use DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi\ButtonSemanticUi;
use DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi\CheckboxSemanticUi;
use DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;
use DesignPatterns\Creational\AbstractFactory\Interfaces\CheckboxInterface;
use DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUiFactory implements GuiFactoryInterface
{

    public function buildButton(): ButtonInterface
    {
        return new ButtonSemanticUi();
    }

    public function buildCheckBox(): CheckboxInterface
    {
        return new CheckboxSemanticUi();
    }
}
