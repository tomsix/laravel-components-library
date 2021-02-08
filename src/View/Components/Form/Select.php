<?php

namespace TomSix\Components\View\Components\Form;

use Illuminate\View\View;
use Illuminate\Support\Collection;

class Select extends BaseInput
{
    /**
     * A list with the value and text of the select options.
     *
     * @var array
     */
    public array $options;

    /**
     * Create a new component instance.
     *
     * @param string           $name
     * @param array|Collection $options
     * @param string|null      $label
     * @param array|string     $inputAttributes
     * @param string|int|null  $value
     * @param string|null      $prepend
     * @param string|null      $append
     */
    public function __construct(string $name, $options, ?string $label = null, $inputAttributes = [], $value = null, ?string $prepend = null, ?string $append = null)
    {
        parent::__construct($name, $label, $inputAttributes, $value, $prepend, $append);

        $this->options = $options instanceof Collection ? $options->toArray() : $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('laravel-components-library::form.select');
    }

    /**
     * Determine if the given option is the current selected option.
     *
     * @param string|int $option
     *
     * @return string
     */
    public function isSelected($option): string
    {
        return $option == old($this->name, $this->value) ? 'selected' : '';
    }
}
