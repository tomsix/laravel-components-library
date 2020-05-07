<?php


namespace TomSix\Components\View\Components\Navigation;


use Illuminate\Support\Str;
use Illuminate\View\Component;

class Item extends Component
{
    public string $href;

    public string $class;

    public function __construct(?string $href = null)
    {
        $this->href = $href ? $href : 'javascript:void(0)';
        $this->class = config('library.css.navigation.item') . Str::startsWith(request()->url(), $href) ? config('library.css.navigation.active') : '';
    }

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
