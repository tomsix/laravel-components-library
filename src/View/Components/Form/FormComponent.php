<?php

namespace TomSix\Components\View\Components\Form;

use Illuminate\View\Component;

abstract class FormComponent extends Component
{
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
    public ?string $label;

    /**
     * Define a default value.
     *
     * @var mixed
     */
    public $value;

    /**
     * All extra HTML-tag attributes.
     *
     * @var string
     */
    public string $inputAttributes;

    /**
     * Create a new component instance.
     *
     * @param string       $name
     * @param string|null  $label
     * @param array|string $inputAttributes
     * @param mixed        $value
     */
    public function __construct(string $name, ?string $label = null, $inputAttributes = [], $value = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->inputAttributes = is_string($inputAttributes) ? $inputAttributes : $this->renderAttributes($inputAttributes);
        $this->value = old($this->nameWithoutBrackets(), $value) ?? '';
    }

    /**
     * Get the name without brackets when using multiple values.
     *
     * @return string|string[]
     */
    public function nameWithoutBrackets()
    {
        return str_replace('[]', '', $this->name);
    }

    private function renderAttributes(array $attributes): string
    {
        $attributeStrings = [];

        foreach ($attributes as $attribute => $value) {
            if (is_int($attribute)) {
                $attributeStrings[] = $value;
                continue;
            }

            $value = htmlentities($value, ENT_QUOTES, 'UTF-8', false);

            $attributeStrings[] = "{$attribute}={$value}";
        }

        return implode(' ', $attributeStrings);
    }
}
