<?php

namespace TomSix\Components\Test\Unit;

use Illuminate\Support\Facades\Blade;
use TomSix\Components\Test\TestCase;

class ComponentsTest extends TestCase
{
    protected array $aliases;

    public function setUp(): void
    {
        parent::setUp();

        $this->aliases = Blade::getClassComponentAliases();
    }

    /** @test */
    public function form_components_are_loaded()
    {
        $this->assertTrue(isset($this->aliases['form-input']));
        $this->assertTrue(isset($this->aliases['form-input-group']));
        $this->assertTrue(isset($this->aliases['form-select']));
        $this->assertTrue(isset($this->aliases['form-model-select']));
        $this->assertTrue(isset($this->aliases['form-textarea']));
        $this->assertTrue(isset($this->aliases['form-checkboxes']));
        $this->assertTrue(isset($this->aliases['form-checkbox']));
        $this->assertTrue(isset($this->aliases['form-errors']));
        $this->assertTrue(isset($this->aliases['form-error']));
        $this->assertTrue(isset($this->aliases['form-file']));
    }

    /** @test */
    public function it_find_all_navigation_components()
    {
        $this->assertTrue(isset($this->aliases['navigation-item']));
        $this->assertTrue(isset($this->aliases['navigation-label']));
    }
}
