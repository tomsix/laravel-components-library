<?php

namespace TomSix\Components\View\Components\Form;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class Input extends BaseInput
{
    /**
     * Specifies the placeholder.
     *
     * @var string
     */
    public string $placeholder;

    /**
     * Set the type of the input.
     *
     * @var string
     */
    public string $type;

    /**
     * Create a new component instance.
     *
     * @param string       $name
     * @param string|null  $label
     * @param array|string $inputAttributes
     * @param mixed        $value
     * @param string       $placeholder
     * @param string       $type
     * @param string|null  $prepend
     * @param string|null  $append
     */
    public function __construct(string $name, ?string $label = null, $inputAttributes = [], $value = null, string $placeholder = '', string $type = 'text', ?string $prepend = null, ?string $append = null)
    {
        parent::__construct($name, $label, $inputAttributes, $value, $prepend, $append);

        $this->placeholder = $placeholder;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View|string
     */
    public function render()
    {
        return view('laravel-components-library::form.input');
    }
}
