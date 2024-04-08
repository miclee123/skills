<?php

namespace CodeExample;

trait Trait2
{
    use Trait3;

    public function func(string $param): string
    {
        return 'trait 2 ' . $param;
    }
}