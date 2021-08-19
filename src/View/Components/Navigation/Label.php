<?php

namespace TomSix\Components\View\Components\Navigation;

use TomSix\Components\View\Components\Component;

class Label extends Component
{
    public ?string $text;

    public ?string $icon;

    public function __construct(string $text = null, string $icon = null)
    {
		parent::__construct('navigation');

        $this->text = $text;
        $this->icon = $icon;
    }
}
