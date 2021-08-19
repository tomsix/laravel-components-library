<?php

namespace TomSix\Components\Tests\Unit;

use TomSix\Components\Test\TestCase;
use TomSix\Components\View\Components\Form\Input;

class InputTest extends TestCase
{
    /** @test */
    public function it_constructs_correctly()
    {
        $component = new Input('email', 'Email Address', '', 'Tom', 'Type your email', 'email', '@', '#');

        self::assertEquals('email', $component->name);
        self::assertEquals('Email Address', $component->labelText);
        self::assertEquals('Tom', $component->value);
        self::assertEquals('Type your email', $component->placeholder);
        self::assertEquals('@', $component->prepend);
        self::assertEquals('#', $component->append);
    }

    /** @test */
    public function it_renders_the_input_attributes()
    {
        $attributes = ['required', 'id' => '25', 'disabled', 'test' => 'succeed'];

        $component = new Input($this->faker->word, null, $attributes);

        self::assertEquals('required id=25 disabled test=succeed', $component->inputAttributes);
    }
}
