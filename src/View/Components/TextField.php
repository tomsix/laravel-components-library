<?php


namespace TomSix\Components\View\Components;


use Illuminate\View\Component;

class TextField extends Component
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('library::text-field');
    }
}
