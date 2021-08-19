<?php

namespace TomSix\Components\View\Components\Form;

class Input extends FormComponent
{
    /**
     * Set a Bootstrap prepend to the input
     *
     * @var string|null $prepend
     */
    public ?string $prepend;

    /**
     * Set a Bootstrap append to the input
     *
     * @var string|null $append
     */
    public ?string $append;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string|null  $label
     * @param  array|string  $inputAttributes
     * @param  mixed  $value
     * @param  string|null  $prepend
     * @param  string|null  $append
     * @param  bool|null  $showErrors
     */
    public function __construct(
        string $name,
        ?string $label = null,
        $inputAttributes = [],
        $value = null, ?string
        $prepend = null,
        ?string $append = null,
        ?bool $showErrors = null
    ) {
        parent::__construct($name, $label, $inputAttributes, $value, $showErrors);

        $this->prepend = $prepend;
        $this->append = $append;
    }
}
