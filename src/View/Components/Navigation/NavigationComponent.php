<?php

namespace TomSix\Components\View\Components\Navigation;

use TomSix\Components\View\Components\Component;

abstract class NavigationComponent extends Component
{
	public function __construct()
	{
		parent::__construct('navigation');
	}
}