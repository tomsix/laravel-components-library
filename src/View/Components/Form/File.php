<?php

namespace TomSix\Components\View\Components\Form;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class File extends Input
{
    /**
     * Create a new component instance.
     *
     * @param string       $name
     * @param string|null  $label
     * @param array|string $inputAttributes
     * @param string|null  $prepend
     * @param string|null  $append
     */
    public function __construct(string $name, ?string $label = null, $inputAttributes = [], ?string $prepend = null, ?string $append = null)
    {
        parent::__construct($name, $label, $inputAttributes, null, '', 'file', $prepend, $append);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View|string
     */
    public function render()
    {
        return view('laravel-components-library::form.file');
    }
}
