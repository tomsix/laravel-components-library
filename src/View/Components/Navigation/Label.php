<?php

namespace TomSix\Components\View\Components\Navigation;

class Label extends NavigationComponent
{
    public ?string $text;

    public ?string $icon;

    public function __construct(string $text = null, string $icon = null)
    {
		parent::__construct();

        $this->text = $text;
        $this->icon = $icon;
    }
}
