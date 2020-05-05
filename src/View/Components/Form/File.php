<?php


namespace TomSix\Components\View\Components\Form;


class File extends Input
{
    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $label
     * @param array|string $inputAttributes
     * @param string|null $prepend
     * @param string|null $append
     */
    public function __construct(string $name, ?string $label = null, $inputAttributes = [], ?string $prepend = null, ?string $append = null)
    {
        parent::__construct($name, $label, $inputAttributes, null, '', 'file', $prepend, $append);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function render()
    {
        return view('laravel-components-library::form.file');
    }
}
