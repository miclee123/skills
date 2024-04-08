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

class ClosureThis
{
    private int $a = 100;

    private function multiple(): int
    {
        return $this->a * 10;
    }
    public function handle(Closure $closure)
    {
        return $closure($this->multiple());
    }
}

class ClosureHandler
{
    private int $a = 20;

    public function call(): Closure
    {
        return function () {
            return get_class($this) . ' ' . $this->a;
        };
    }
}

$closureThis = new ClosureThis();
$closureHandler = new ClosureHandler();

$f = $closureHandler->call();

echo $closureThis->handle($f) . PHP_EOL;

$f2 = $f->bindTo($closureThis, $closureThis);

echo $closureThis->handle($f2) . PHP_EOL;


