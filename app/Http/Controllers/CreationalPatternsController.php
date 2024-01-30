<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\DesignPatterns\Creational\AbstractFactory\GuiKitFactory;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CreationalPatternsController extends Controller
{
    public function abstractFactory(Request $request): View
    {
        $guiKit = (new GuiKitFactory())->getFactory($request->get('type') ?: GuiKitFactory::TYPE_SEMANTIC_UI);

        Debugbar::info([
            $guiKit->buildButton()->draw(),
            $guiKit->buildCheckBox()->draw(),
        ]);

        return view('skills');
    }
}
