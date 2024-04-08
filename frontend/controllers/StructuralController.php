<?php

namespace frontend\controllers;

use DesignPatterns\Structural\Adapter\Classes\ExternalLibrary;
use DesignPatterns\Structural\Adapter\Interfaces\MyLibraryInterface;
use yii\web\Controller;
use yii\web\Request;

class StructuralController extends Controller
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }

    public function actionAdapter(MyLibraryInterface $myLibrary, Request $request): string
    {
        $data = null;
        $wrappedData = null;
        $info = null;

        /** @var ExternalLibrary $myLibrary */
        if ($info = $request->get('info')) {
            $myLibrary->setInfo($info);
            $data = $myLibrary->getInfo();
            $wrappedData = $myLibrary->wrappedData();
        }

        return $this->render(
            'adapter',
            compact('data', 'wrappedData', 'info')
        );
    }
}