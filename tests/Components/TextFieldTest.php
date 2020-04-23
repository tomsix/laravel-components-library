<?php

namespace TomSix\Components\Test\Components;

use TomSix\Components\Test\TestCase;

class TextFieldTest extends TestCase
{
    /** @test */
    public function it_compiles_the_component()
    {
        $this->withoutExceptionHandling();

        $this->blade->compileString('<x-text-field  />');

        $this->assertTrue(true);
    }
}
