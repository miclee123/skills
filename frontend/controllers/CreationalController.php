<?php

namespace frontend\controllers;

use frontend\DesignPatterns\Creational\AbstractFactory\GuiKitFactory;
use yii\web\Controller;
use yii\web\Request;

class CreationalController extends Controller
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }

    public function actionAbstractFactory(Request $request): string
    {
        $type = $request->get('type') ?: GuiKitFactory::TYPE_SEMANTIC_UI;
        $guiKit = (new GuiKitFactory())->getFactory($type);

        return $this->render(
            'abstract-factory',
            [
                'button' => $guiKit->buildButton(),
                'checkbox' => $guiKit->buildCheckBox(),
                'type' => $type,
            ]
        );
    }
}