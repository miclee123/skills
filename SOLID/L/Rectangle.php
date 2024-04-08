<?php

namespace SOLID\L;

class Rectangle implements GeometricShapeInterface
{
    private float $width;
    private float $height;

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }
}