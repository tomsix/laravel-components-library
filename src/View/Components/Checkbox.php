<?php


namespace TomSix\Components\View\Components;


class Checkbox extends FromGroup
{
    public string $idName;

    /**
     * Add the bootstrap inline class when enabled
     *
     * @var string $inline
     */
    public string $inline;

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
     */
    public function __construct(string $name, string $idName, ?string $label = null, bool $disabled = false, bool $readonly = false, $value = null, bool $inline = false)
    {
        parent::__construct($name, $label, $disabled, $readonly, $value);

        $this->idName = $idName;
        $this->inline = $inline ? ' form-check-inline' : '';
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
