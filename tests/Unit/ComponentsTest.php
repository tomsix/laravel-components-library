<?php

namespace TomSix\Components\Test\Unit;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use TomSix\Components\Test\TestCase;
use TomSix\Components\View\Components\Form\Checkbox;
use TomSix\Components\View\Components\Form\Form;
use TomSix\Components\View\Components\Form\Input;

class ComponentsTest extends TestCase
{
	use InteractsWithViews;

    protected array $aliases;

    public function setUp(): void
    {
        parent::setUp();
    }

	public function testForm()
	{
		$this->component(Form::class, ['method' => 'post'])->assertSeeText('');
	}

	public function testInput()
	{
		$this->component(Input::class, ['name' => 'test'])->assertSeeText('');
	}

	public function testCheckbox()
	{
		$this->component(Checkbox::class, ['name' => 'test', 'value' => 1])->assertSeeText('');
	}
}
