<?php

declare(strict_types=1);

$a = 8;
$b = 10;
$x = 22;

$closure = function($c) use($a, $b)
{
    return $a + $b + $c;
};

$a = 44; // не применится, если что. Потому что замыкание берет значение на момент применения use

$result = $closure($x);
echo $result . PHP_EOL;
