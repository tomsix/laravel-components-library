<?php

namespace TomSix\Components;

use Illuminate\Support\ServiceProvider;
use TomSix\Components\View\Components\TextField;

class LibraryServiceProvider extends ServiceProvider
{
    /** @var string  */
    private const PATH_VIEWS = __DIR__ . '/../resources/views';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(self::PATH_VIEWS, 'library');

        $this->publishes([
            self::PATH_VIEWS => resource_path('views/vendor/library'),
        ], 'views');

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
