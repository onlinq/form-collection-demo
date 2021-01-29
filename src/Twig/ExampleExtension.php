<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ExampleExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('example', [$this, 'example']),
        ];
    }

    public function example($value): string
    {
        return file_get_contents(dirname(dirname(__DIR__)) . '/examples/' . $value . '.text');
    }
}
