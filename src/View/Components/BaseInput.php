<?php


namespace TomSix\Components\View\Components;

abstract class BaseInput extends FormComponent
{
    /**
     * Set a Bootstrap prepend to the input
     *
     * @var string|null $prepend
     */
    public ?string $prepend;

    /**
     * Set a Bootstrap append to the input
     *
     * @var string|null $append
     */
    public ?string $append;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $label
     * @param array|string $inputAttributes
     * @param mixed $value
     * @param string $placeholder
     * @param string $type
     * @param string|null $prepend
     * @param string|null $append
     */
    public function __construct(string $name, ?string $label = null, $inputAttributes = [], $value = null, ?string $prepend = null, ?string $append = null)
    {
        parent::__construct($name, $label, $inputAttributes, $value);

        $this->prepend = $prepend;
        $this->append = $append;
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
