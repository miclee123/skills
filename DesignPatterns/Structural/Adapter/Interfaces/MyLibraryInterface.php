<?php

namespace DesignPatterns\Structural\Adapter\Interfaces;

interface MyLibraryInterface
{
    public function setInfo(string $info): void;
    public function getInfo(): string;
}