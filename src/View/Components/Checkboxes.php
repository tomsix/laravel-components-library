<?php


namespace TomSix\Components\View\Components;


class Checkboxes extends FromGroup
{
    /**
     * If the checkboxes must be inline
     *
     * @var bool $inline
     */
    public bool $inline;

    /**
     * A list of given options
     *
     * @var iterable $options
     */
    public iterable $options;

    public function __construct(string $name, ?string $label = null, iterable $options = [], bool $inline = false, bool $disabled = false, bool $readonly = false, $value = null)
    {
        parent::__construct($name, $label, $disabled, $readonly, $value);

        $this->inline = $inline;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('library::form.checkboxes');
    }
}
