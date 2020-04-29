<?php

namespace TomSix\Components\View\Components;

class Textarea extends Group
{
    /**
     * Specifies the placeholder
     *
     * @var string $placeholder
     */
    public string $placeholder;

    /**
     * TextArea constructor.
     * @param string $name
     * @param string|null $label
     * @param array|string $inputAttributes
     * @param mixed $value
     * @param string $placeholder
     */
    public function __construct(string $name, ?string $label = null, $inputAttributes = [], $value = null, string $placeholder = '')
    {
        parent::__construct($name, $label, $inputAttributes, $value);

        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('library::form.textarea');
    }
}
