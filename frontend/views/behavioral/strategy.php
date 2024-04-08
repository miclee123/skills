<?php

/**
 * @var array $prizes
 */

use yii\helpers\Html;

foreach ($prizes as $prize) {
    echo Html::tag(
        'div',
        'name: ' . $prize['name'] .
        ', is boss: ' . $prize['is boss'] .
        ', strategy: ' . $prize['strategy'] .
        ', prize: ' . $prize['prize'],
        ['class' => 'container']
    );
}