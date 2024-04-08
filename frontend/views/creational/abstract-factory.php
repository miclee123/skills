<?php

use DesignPatterns\Creational\AbstractFactory\GuiKitFactory;
use DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;
use DesignPatterns\Creational\AbstractFactory\Interfaces\CheckboxInterface;
use yii\helpers\Html;

/**
 * @var ButtonInterface $button
 * @var CheckboxInterface $checkbox
 * @var string $type
 */

echo Html::tag(
    'div',
    Html::beginForm(['/creational/abstract-factory'], 'get') .
    Html::dropDownList(
        'type',
        $type,
        [
            GuiKitFactory::TYPE_SEMANTIC_UI => 'Semantic UI',
            GuiKitFactory::TYPE_BOOTSTRAP   => 'Bootstrap',
        ],
        [
            'class' => 'form-control mt-5',
        ]
    ) .
    Html::submitButton('Change type', ['class' => 'btn btn-lg btn-success mt-5 mb-5']) .
    Html::endForm(),
    ['class' => 'container']
);

echo $button->draw() . PHP_EOL . $checkbox->draw();