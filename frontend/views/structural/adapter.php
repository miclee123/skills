<?php

/**
 * @var ?string $data
 * @var ?string $wrappedData
 * @var ?string $info
 */

use yii\helpers\Html;

echo Html::tag(
    'div',
    Html::beginForm(['/structural/adapter'], 'get') .
    Html::textInput(
        'info',
        $info,
        [
            'class' => 'form-control mt-5',
        ]
    ) .
    Html::submitButton('Set info', ['class' => 'btn btn-lg btn-success mt-5 mb-5']) .
    Html::endForm(),
    ['class' => 'container']
);

echo $data . PHP_EOL . $wrappedData;