<?php

namespace TomSix\Components\View\Components\Form;

use Illuminate\Support\Str;

class Checkbox extends FormComponent
{
    /**
     * @var string
     */
    public string $parentName;

    /**
     * Add the bootstrap inline class when enabled.
     *
     * @var string
     */
    public string $inline;

    /**
     * Set the 'checked' attribute if checked.
     *
     * @var string
     */
    public string $checked;

    /**
     * Set the type of the input.
     *
     * @var string
     */
    public string $type;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string|null  $parentName
     * @param  string|null  $label
     * @param  array|string  $inputAttributes
     * @param  mixed  $value
     * @param  bool  $inline
     * @param  string  $type
     * @param  bool  $checked
     * @param  bool|null  $showErrors
     */
    public function __construct(
        string $name,
        ?string $parentName = null,
        ?string $label = null,
        $inputAttributes = [],
        $value = null,
        bool $inline = false,
        string $type = 'checkbox',
        ?bool $checked = false,
        ?bool $showErrors = null
    )
    {
        parent::__construct($name, $label, $inputAttributes, $value, $showErrors);

        $this->parentName = $parentName ?? $this->name;
        $this->value = $value;
        $this->inline = $inline ? ' '.config('library.css.form.checkbox.inline') : '';
        $this->checked = $checked ? 'checked' : '';
        $this->type = $type;
    }

    public function errorName(): string
    {
        if (Str::endsWith($this->name, '[]')) {
            return $this->convertBracketsToDots($this->name);
        }

        return $this->parentName;
    }
}
