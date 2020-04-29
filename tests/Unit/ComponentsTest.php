<?php

namespace TomSix\Components\Test\Unit;

use TomSix\Components\Test\TestCase;

class ComponentsTest extends TestCase
{
    /** @test */
    public function it_find_all_components()
    {
        $this->blade->compileString('<x-form-input  />');
        $this->blade->compileString('<x-form-input-group  />');
        $this->blade->compileString('<x-form-select  />');
        $this->blade->compileString('<x-form-model-select  />');
        $this->blade->compileString('<x-form-textarea  />');
        $this->blade->compileString('<x-form-checkboxes  />');
        $this->blade->compileString('<x-form-checkbox  />');
        $this->blade->compileString('<x-form-errors  />');
        $this->blade->compileString('<x-form-error  />');
        $this->blade->compileString('<x-form-file  />');

        $this->assertTrue(true);
    }
}
