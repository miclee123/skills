<?php

namespace SOLID\L;

class Square implements GeometricShapeInterface
{
    private float $side;

    public function setSide(float $side) {
        $this->side = $side;
    }
    public function calculateArea(): float
    {
        return $this->side * $this->side;
    }
}