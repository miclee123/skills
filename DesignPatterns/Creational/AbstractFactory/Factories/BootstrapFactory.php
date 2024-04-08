<?php

namespace DesignPatterns\Creational\AbstractFactory\Factories;

use DesignPatterns\Creational\AbstractFactory\Classes\Bootstrap\ButtonBootstrap;
use DesignPatterns\Creational\AbstractFactory\Classes\Bootstrap\CheckboxBootstrap;
use DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;
use DesignPatterns\Creational\AbstractFactory\Interfaces\CheckboxInterface;
use DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

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
