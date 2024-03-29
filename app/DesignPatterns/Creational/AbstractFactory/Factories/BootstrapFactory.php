<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Factories;

use App\DesignPatterns\Creational\AbstractFactory\Classes\Bootstrap\ButtonBootstrap;
use App\DesignPatterns\Creational\AbstractFactory\Classes\Bootstrap\CheckboxBootstrap;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

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
