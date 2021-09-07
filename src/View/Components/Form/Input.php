<?php

namespace TomSix\Components\View\Components\Form;

class Input extends FormComponent
{
    /**
     * Set a Bootstrap prepend to the input
     *
     * @var string|null $prepend
     */
    public ?string $prependText;

    /**
     * Set a Bootstrap append to the input
     *
     * @var string|null $append
     */
    public ?string $appendText;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string|null  $label

     * @param  mixed  $value
     * @param  string|null  $prepend
     * @param  string|null  $append
     * @param  bool|null  $showErrors
     */
    public function __construct(
        string $name,
        ?string $label = null,
        $value = null, ?string
        $prepend = null,
        ?string $append = null,
        ?bool $showErrors = null
    ) {
        parent::__construct($name, $label, $value, $showErrors);

        $this->prependText = $prepend;
        $this->appendText = $append;
    }
}
