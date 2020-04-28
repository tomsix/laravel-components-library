<?php


namespace TomSix\Components\View\Components;


use Illuminate\View\Component;

class Errors extends Component
{
    /**
     * @var string $title
     */
    public ?string $title;

    /**
     * @var string $color
     */
    public string $color;

    public function __construct(?string $title = null, ?string $color = null)
    {
        $this->title = $title;
        $this->color = $color ?? 'danger';
    }


    public function render()
    {
        return view('library::form.errors');
    }
}
