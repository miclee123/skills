<?php

namespace CodeExample;

trait UseTraitsExample
{
    use Trait1, Trait2
    {
        Trait2::func insteadof Trait1;
        Trait1::func as func1;
    }
}