<?php

namespace TomSix\Components\View\Components\Form;

use TomSix\Components\View\Components\Component;

abstract class FormComponent extends Component
{
    use HandlesValidationErrors;

    /**
     * Specifies the name.
     *
     * @var string
     */
    public string $name;

    /**
     * The label text. There will no label rendered if it isn't provided.
     *
     * @var string|null
     */
    public ?string $labelText;

    /**
     * Define a default value.
     *
     * @var mixed
     */
    public $value;

    /**
     * All extra HTML-tag attributes.
     *
     * @var array
     */
    public array $inputAttributes;


	/**
	 * Create a new component instance.
	 *
	 * @param string $name
	 * @param string|null $label
	 * @param array|null $inputAttributes
	 * @param mixed $value
	 * @param bool|null $showErrors
	 */
    public function __construct(string $name, ?string $label = null, ?array $inputAttributes = [], $value = null, ?bool $showErrors = null)
    {
        $this->name = $name;
        $this->labelText = $label;
        $this->inputAttributes = $inputAttributes;
        $this->value = old($this->convertBracketsToDots($name), $value) ?? null;
        $this->showErrors = $showErrors ?? config('library.inline_errors');
    }

    public function renderInputAttributes(): string
    {
        $attributeStrings = [];

        foreach ($this->inputAttributes as $key => $value) {
            if (is_int($key)) {
                $attributeStrings[] = $value;
                continue;
            }

            $value = htmlentities($value, ENT_QUOTES, 'UTF-8', false);

            $attributeStrings[] = "$key=$value";
        }

        return implode(' ', $attributeStrings);
    }
}
