<?php

namespace DesignPatterns\Structural\Adapter\Classes;

use DesignPatterns\Structural\Adapter\Interfaces\ExternalLibraryInterface;
use yii\helpers\Html;

class ExternalLibrary implements ExternalLibraryInterface
{
    private string $data;

    public function setData(string $data): void
    {
        $this->data = $data;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function wrappedData(): string
    {
        return Html::tag(
            'h2',
            $this->data
        );
    }
}