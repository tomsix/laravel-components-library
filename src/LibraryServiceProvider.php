<?php

namespace TomSix\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LibraryServiceProvider extends ServiceProvider
{
    /** @var string */
    private const CONFIG_FILE = __DIR__.'/../config/library.php';

    /** @var string */
    private const PATH_VIEWS = __DIR__.'/../resources/views';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        if (function_exists('config_path')) { // function not available and 'publish' not relevant in Lumen
            $this->publishes([
                self::CONFIG_FILE => config_path('library.php'),
            ], 'config');
        }

        $this->loadViewsFrom(self::PATH_VIEWS, 'laravel-components-library');

        $this
            ->registerComponents()
            ->registerComponentsPublishers();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(self::CONFIG_FILE, 'library');
    }

    /**
     * Register the Blade form components.
     *
     * @return $this
     */
    private function registerComponents(): self
    {
        Blade::componentNamespace('TomSix\\Components\\View\\Components\\Form', config('library.prefix.form'));

        Blade::componentNamespace('TomSix\\Components\\View\\Components\\Navigation', config('library.prefix.navigation'));

        return $this;
    }

    /**
     * Register the publishers of the component resources.
     *
     * @return $this
     */
    public function registerComponentsPublishers(): self
    {
        $this->publishes([
            self::PATH_VIEWS => resource_path('views/vendor/laravel-components-library'),
        ], 'components');

        $this->publishes([
            self::PATH_VIEWS . '/form' => resource_path('views/vendor/laravel-components-library/form'),
        ], 'form-components');

        $this->publishes([
            self::PATH_VIEWS . '/navigation' => resource_path('views/vendor/laravel-components-library/navigation'),
        ], 'navigation-components');

        return $this;
    }
}
