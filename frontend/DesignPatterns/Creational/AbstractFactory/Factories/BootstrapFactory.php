<?php

namespace frontend\DesignPatterns\Creational\AbstractFactory\Factories;

use frontend\DesignPatterns\Creational\AbstractFactory\Classes\Bootstrap\ButtonBootstrap;
use frontend\DesignPatterns\Creational\AbstractFactory\Classes\Bootstrap\CheckboxBootstrap;
use frontend\DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;
use frontend\DesignPatterns\Creational\AbstractFactory\Interfaces\CheckboxInterface;
use frontend\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class BootstrapFactory implements GuiFactoryInterface
{

    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }

    public function buildCheckBox(): CheckboxInterface
    {
        return new CheckboxBootstrap();
    }
}
