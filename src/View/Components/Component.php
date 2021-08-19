<?php

namespace TomSix\Components\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component as BaseComponent;

abstract class Component extends BaseComponent
{
    /** @inheritDoc */
    public function render()
    {
        $alias = Str::kebab(class_basename($this));

        return view("laravel-components-library::form.$alias");
    }

    /**
     * Converts a bracket-notation to a dotted-notation
     *
     * @param string $name
     * @return string
     */
    protected function convertBracketsToDots(string $name): string
    {
        return str_replace(['[', ']'], ['.', ''], $name);
    }
}