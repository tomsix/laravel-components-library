<?php

namespace TomSix\Components\Test;

use Illuminate\Support\Facades\Artisan;
use Orchestra\Testbench\TestCase as Orchestra;
use TomSix\Components\LibraryServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Artisan::call('view:clear');
    }

    protected function getPackageProviders($app)
    {
        return [
            LibraryServiceProvider::class
        ];
    }
}
