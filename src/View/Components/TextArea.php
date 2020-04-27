<?php

namespace TomSix\Components\View\Components;

class TextArea extends BaseInput
{
    /**
     * TextArea constructor.
     * @param string $name
     * @param string|null $label
     * @param string|null $placeholder
     * @param string|null $type
     * @param bool $required
     * @param bool $disabled
     * @param bool $readonly
     * @param mixed $value
     */
    public function __construct(string $name, ?string $label = null, ?string $placeholder = null, ?string $type = null, bool $required = false, bool $disabled = false, bool $readonly = false, $value = null)
    {
        parent::__construct($name, $label, $placeholder, $type, $required, $disabled, $readonly, $value);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('library::form.text-area');
    }
}
