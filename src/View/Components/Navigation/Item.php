<?php

namespace TomSix\Components\View\Components\Navigation;

use Illuminate\Support\Str;

class Item extends NavigationComponent
{
    public string $href;

    public string $class;

    public function __construct(?string $href = null)
    {
    	parent::__construct();

        $this->href ??= 'javascript:void(0)';
        $this->class = config('library.css.navigation.item').Str::startsWith(request()->url(), $href) ? config('library.css.navigation.active') : '';
    }
}
