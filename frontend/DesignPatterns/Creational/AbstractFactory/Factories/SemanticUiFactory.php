<?php

namespace frontend\DesignPatterns\Creational\AbstractFactory\Factories;

use frontend\DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi\ButtonSemanticUi;
use frontend\DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi\CheckboxSemanticUi;
use frontend\DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;
use frontend\DesignPatterns\Creational\AbstractFactory\Interfaces\CheckboxInterface;
use frontend\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

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
