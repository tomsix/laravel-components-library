<?php


namespace TomSix\Components\View\Components\Navigation;


use Illuminate\View\Component;

class Item extends Component
{
    /**
     * Renders the classes
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function render()
    {
        return view('laravel-components-library::navigation.item');
    }
}
