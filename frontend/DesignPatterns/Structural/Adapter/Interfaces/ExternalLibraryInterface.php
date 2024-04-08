<?php

namespace frontend\DesignPatterns\Structural\Adapter\Interfaces;

interface ExternalLibraryInterface
{
    public function setData(string $data): void;
    public function getData(): string;
}