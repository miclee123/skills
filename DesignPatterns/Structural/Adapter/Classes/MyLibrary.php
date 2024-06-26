<?php

namespace DesignPatterns\Structural\Adapter\Classes;

use DesignPatterns\Structural\Adapter\Interfaces\MyLibraryInterface;

class MyLibrary implements MyLibraryInterface
{
    private string $info;

    public function setInfo(string $info): void
    {
        $this->info = $info;
    }

    public function getInfo(): string
    {
        return $this->info;
    }
}