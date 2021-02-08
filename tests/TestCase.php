<?php

namespace TomSix\Components\Test;

use Illuminate\Foundation\Testing\WithFaker;
use Orchestra\Testbench\TestCase as Orchestra;
use TomSix\Components\LibraryServiceProvider;

class TestCase extends Orchestra
{
    use WithFaker;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LibraryServiceProvider::class,
        ];
    }
}
