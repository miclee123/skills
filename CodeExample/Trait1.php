<?php

namespace CodeExample;

trait Trait1
{
    public function func(string $param): string
    {
        return 'trait 1 ' . $param;
    }
}