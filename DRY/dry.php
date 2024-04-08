<?php

const PI = 3.14;

function calculateAreaOfCircle($radius): float
{
    return PI * pow($radius, 2);
}

function calculateVolumeOfSphere($radius): float
{
    return (4 / 3) * PI * pow($radius, 3);
}
