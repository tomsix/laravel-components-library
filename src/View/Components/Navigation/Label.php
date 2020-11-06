<?php

namespace TomSix\Components\View\Components\Navigation;

use Illuminate\View\Component;

class Label extends Component
{
    public ?string $text;

    public ?string $icon;

    public function __construct(string $text = null, string $icon = null)
    {
        $this->text = $text;
        $this->icon = $icon;
    }

    /**
     * Renders the classes.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function render()
    {
        return view('laravel-components-library::navigation.label');
    }
}
