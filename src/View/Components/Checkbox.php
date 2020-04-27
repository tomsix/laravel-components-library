<?php


namespace TomSix\Components\View\Components;


class Checkbox extends FromGroup
{
    /**
     * @var string
     */
    public string $idName;

    /**
     * @var mixed
     */
    public $value;

    /**
     * Add the bootstrap inline class when enabled
     *
     * @var string $inline
     */
    public string $inline;

    /**
     * The type of the checkbox/radio button
     *
     * @var string $type
     */
    public string $type;

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
     * @param bool $disabled
     * @param bool $readonly
     * @param mixed $value
     * @param bool $inline
     * @param string $type
     * @param bool $checked
     */
    public function __construct(string $name, string $idName, ?string $label = null, bool $disabled = false, bool $readonly = false, $value = null, bool $inline = false, string $type = 'checkbox', bool $checked = false)
    {
        parent::__construct($name, $label, $disabled, $readonly);

        $this->idName = $idName;
        $this->value = $value;
        $this->inline = $inline ? ' form-check-inline' : '';
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
        return view('library::form.checkbox');
    }
}
