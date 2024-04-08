<?php

namespace DesignPatterns\Behavioral\Classes;

class Employee
{
    public function __construct(private readonly string $name, private readonly bool $isBoss) {}

    public function isBoss(): bool
    {
        return $this->isBoss;
    }

    public function getName(): string
    {
        return $this->name;
    }
}