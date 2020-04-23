<?php

namespace TomSix\Components;

use Illuminate\Support\ServiceProvider;
use TomSix\Components\View\Components\TextField;

class LibraryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'library');

        $this->loadViewComponentsAs('', [
            TextField::class
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }
}
