<?php


namespace TomSix\Components\View\Components;

class Input extends FormGroup
{
    /**
     * Specifies the placeholder
     *
     * @var string $placeholder
     */
    public string $placeholder;

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
     * @param string|null $label
     * @param array|string $inputAttributes
     * @param mixed $value
     * @param string $placeholder
     * @param string $type
     */
    public function __construct(string $name, ?string $label = null, $inputAttributes = [], $value = null, string $placeholder = '', string $type = 'text')
    {
        parent::__construct($name, $label, $inputAttributes, $value);

        $this->placeholder =$placeholder;
        $this->type = $type;
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
