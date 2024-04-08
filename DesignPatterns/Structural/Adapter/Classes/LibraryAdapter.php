<?php

namespace DesignPatterns\Structural\Adapter\Classes;

use DesignPatterns\Structural\Adapter\Interfaces\ExternalLibraryInterface;
use DesignPatterns\Structural\Adapter\Interfaces\MyLibraryInterface;
use http\Exception\BadMethodCallException;

class LibraryAdapter implements MyLibraryInterface
{
    private ExternalLibraryInterface $externalLibrary;

    public function __construct()
    {
        $this->externalLibrary = new ExternalLibrary();
    }

    public function setInfo(string $info): void
    {
        $this->externalLibrary->setData($info);
    }

    public function getInfo(): string
    {
        return $this->externalLibrary->getData();
    }

    public function __call(string $name, array $arguments)
    {
        if (method_exists($this->externalLibrary, $name)) {
            return call_user_func_array([$this->externalLibrary, $name], $arguments);
        }

        throw new BadMethodCallException("Method {$name} not exists");
    }
}