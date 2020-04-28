<?php

namespace TomSix\Components;


use Illuminate\Support\ServiceProvider;
use TomSix\Components\View\Components\Checkbox;
use TomSix\Components\View\Components\Checkboxes;
use TomSix\Components\View\Components\Errors;
use TomSix\Components\View\Components\File;
use TomSix\Components\View\Components\ModelSelect;
use TomSix\Components\View\Components\Select;
use TomSix\Components\View\Components\Input;
use TomSix\Components\View\Components\Textarea;

class LibraryServiceProvider extends ServiceProvider
{
    private const CONFIG_FILE = __DIR__.'/../config/library.php';

    /** @var string  */
    private const PATH_VIEWS = __DIR__ . '/../resources/views';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        if (function_exists('config_path')) { // function not available and 'publish' not relevant in Lumen
            $this->publishes([
                self::CONFIG_FILE => config_path('library.php')
            ], 'config');
        }

        $this->loadViewsFrom(self::PATH_VIEWS, 'library');

        $this->registerFormComponents();
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

    private function registerFormComponents(): void
    {
        $this->loadViewComponentsAs('form', [
            Input::class,
            Select::class,
            ModelSelect::class,
            Textarea::class,
            Checkboxes::class,
            Checkbox::class,
            File::class,
            Errors::class
        ]);

        $this->publishes([
            self::PATH_VIEWS . '/form' => resource_path('views/components/library/form'),
        ], 'form-components');
    }
}
