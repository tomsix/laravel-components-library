<?php


namespace TomSix\Components\View\Components;


abstract class BaseInput extends FormGroup
{
    /**
     * Specifies the placeholder
     *
     * @var string $placeholder
     */
    public string $placeholder;

    /**
     * Set the type of the input
     *
     * @var string $type
     */
    public string $type;


    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $label
     * @param array|string $attributes
     * @param mixed $value
     * @param string|null $placeholder
     * @param string|null $type
     */
    public function __construct(string $name, ?string $label = null, $attributes = [], $value = null, ?string $placeholder = null, ?string $type = null)
    {
        parent::__construct($name, $label, $attributes, $value);

        $this->placeholder = $placeholder ?? '';
        $this->type = $type ?? 'text';
    }
}
