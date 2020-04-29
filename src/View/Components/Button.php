<?php


namespace TomSix\Components\View\Components;


class Button extends FormComponent
{
    /**
     * Set the type of the button
     *
     * @var string $type
     */
    public string $type;

    /**
     * The color class-name
     *
     * @var string $color
     */
    public string $color;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $label
     * @param array $inputAttributes
     * @param string $value
     * @param string $type
     * @param string $color
     */
    public function __construct(string $name = 'submit', ?string $label = null, $inputAttributes = [], $value = null, string $type = 'submit', string $color = 'primary')
    {
        parent::__construct($name, $label, $inputAttributes, $value);

        $this->type = $type;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('library::form.button');
    }
}
