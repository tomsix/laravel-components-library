<?php


namespace TomSix\Components\View\Components;

class Input extends BaseInput
{
    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $label
     * @param string|null $placeholder
     * @param bool $required
     * @param bool $disabled
     * @param bool $readonly
     * @param mixed $value
     * @param string|null $type
     */
    public function __construct(string $name, ?string $label = null, ?string $placeholder = null, bool $required = false, bool $disabled = false, bool $readonly = false, $value = null, string $type = null)
    {
        parent::__construct($name, $label, $required, $disabled, $readonly, $value, $placeholder, $type);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function render()
    {
        return view('library::form.input');
    }
}
