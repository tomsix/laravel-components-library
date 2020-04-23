<?php

namespace TomSix\Components\Test;

use Illuminate\View\Compilers\BladeCompiler;
use Orchestra\Testbench\TestCase as Orchestra;
use TomSix\Components\LibraryServiceProvider;

class TestCase extends Orchestra
{
    protected BladeCompiler $blade;

    protected function setUp(): void
    {
        parent::setUp();

        $this->blade = app('blade.compiler');
    }

    protected function getPackageProviders($app)
    {
        return [
            LibraryServiceProvider::class
        ];
    }
}
