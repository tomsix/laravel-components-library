<?php


namespace TomSix\Components\View\Components\Form;


use Illuminate\Support\Str;

class Checkbox extends FormComponent
{
    /**
     * @var string
     */
    public string $idName;

    /**
     * Add the bootstrap inline class when enabled
     *
     * @var string $inline
     */
    public string $inline;

    /**
     * Set the 'checked' attribute if checked
     *
     * @var string
     */
    public string $checked;

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
     * @param string|null $idName
     * @param string|null $label
     * @param array|string $inputAttributes
     * @param mixed $value
     * @param bool $inline
     * @param string $type
     * @param bool $checked
     */
    public function __construct(string $name, ?string $idName = null, ?string $label = null, $inputAttributes = [], $value = null, bool $inline = false, string $type = 'checkbox', ?bool $checked = false)
    {
        parent::__construct($name, $label, $inputAttributes, $value);

        $this->idName = $idName ? $idName : $this->name;
        $this->value = $value;
        $this->inline = $inline ? ' ' . config('library.css.form.checkbox.inline') : '';
        $this->checked = $checked ? 'checked' : '';
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('laravel-components-library::form.checkbox');
    }

    public function errorName(): string
    {
        if(Str::endsWith($this->name, '[]'))
        {
            return $this->nameWithoutBrackets() . '.' . $this->value;
        }

        return $this->idName;
    }

    /**
     * Renders the classes
     *
     * @return string
     */
    public function cssClass(): string
    {
        if($this->type === 'checkbox')
            return config('library.css.form.checkbox.group') . $this->inline;

        return config('library.css.form.checkbox.radio') . $this->inline;
    }
}
