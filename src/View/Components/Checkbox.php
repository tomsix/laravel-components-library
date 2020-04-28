<?php


namespace TomSix\Components\View\Components;


use Illuminate\Support\Str;

class Checkbox extends BaseInput
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
     * Create a new component instance.
     *
     * @param string $name
     * @param string $idName
     * @param string|null $label
     * @param bool $required
     * @param bool $disabled
     * @param bool $readonly
     * @param mixed $value
     * @param bool $inline
     * @param string $type
     * @param bool $checked
     */
    public function __construct(string $name, string $idName = null, ?string $label = null, bool $required = false, bool $disabled = false, ?bool $readonly = false, $value = null, bool $inline = false, string $type = 'checkbox', ?bool $checked = false)
    {
        parent::__construct($name, $label, $required, $disabled, $readonly, $value, null, $type);

        $this->idName = $idName ? $idName : $this->name;
        $this->value = $value;
        $this->inline = $inline ? ' form-check-inline' : '';
        $this->checked = $checked ? 'checked' : '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('library::form.checkbox');
    }

    public function errorName(): string
    {
        if(Str::endsWith($this->name, '[]'))
        {
            return $this->nameWithoutBrackets() . '.' . $this->value;
        }

        return $this->idName;
    }
}
