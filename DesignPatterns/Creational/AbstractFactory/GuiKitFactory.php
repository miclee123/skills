<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Factories\BootstrapFactory;
use DesignPatterns\Creational\AbstractFactory\Factories\SemanticUiFactory;
use DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;
use InvalidArgumentException;

class GuiKitFactory
{
    public const TYPE_BOOTSTRAP = 'bootstrap';
    public const TYPE_SEMANTIC_UI = 'semantic_ui';

    public const LIST_TYPES = [
        self::TYPE_BOOTSTRAP,
        self::TYPE_SEMANTIC_UI,
    ];

    public function getFactory(string $type): GuiFactoryInterface
    {
        if (!in_array($type, self::LIST_TYPES)) {
            throw new InvalidArgumentException("Wrong gui type: $type");
        }

       return match ($type) {
            self::TYPE_BOOTSTRAP => new BootstrapFactory(),
            self::TYPE_SEMANTIC_UI => new SemanticUiFactory(),
        };
    }
}
