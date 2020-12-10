<?php

namespace TomSix\Components\View\Components\Form;

use Illuminate\View\Component;

class Errors extends Component
{
    /**
     * @var ?string
     */
    public ?string $title;

    /**
     * @var string
     */
    public string $color;

    public function __construct(?string $title = null, ?string $color = null)
    {
        $this->title = $title;
        $this->color = $color ?? 'danger';
    }

    public function render()
    {
        return view('laravel-components-library::form.errors');
    }
}
