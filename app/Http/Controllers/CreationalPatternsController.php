<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar;

class CreationalPatternsController extends Controller
{
    public function abstractFactory(): void
    {
        Debugbar::info([]);
    }
}
