<?php

namespace TomSix\Components\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component as BaseComponent;

abstract class Component extends BaseComponent
{
	protected string $namespace;

	public function __construct(string $namespace)
	{
		$this->namespace = $namespace;
	}

    /** @inheritDoc */
    public function render()
    {
        $alias = Str::kebab(class_basename($this));

        return view("laravel-components-library::$this->namespace.$alias");
    }

	/**
	 * Converts a bracket-notation to a dotted-notation
	 *
	 * @param string $name
	 * @return string
	 */
	protected function convertBracketsToDots(string $name): string
	{
		return rtrim(str_replace(['[', ']'], ['.', ''], $name), '.');
	}
}