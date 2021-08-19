<?php

namespace TomSix\Components\View\Components\Navigation;

use Illuminate\Support\Str;
use TomSix\Components\View\Components\Component;

class Item extends Component
{
    public string $href;

    public string $class;

    public function __construct(?string $href = null)
    {
    	parent::__construct('navigation');

        $this->href ??='javascript:void(0)';
        $this->class = config('library.css.navigation.item').Str::startsWith(request()->url(), $href) ? config('library.css.navigation.active') : '';
    }
}
