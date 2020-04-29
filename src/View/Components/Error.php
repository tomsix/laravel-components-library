<?php


namespace TomSix\Components\View\Components;


use Illuminate\View\Component;

class Error extends Component
{
    /**
     * @var string $name
     */
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function render()
    {
        return view('library::form.error');
    }
}
