<?php

namespace TomSix\Components;


use Illuminate\Support\ServiceProvider;
use TomSix\Components\View\Components\Checkbx;
use TomSix\Components\View\Components\Checkboxes;
use TomSix\Components\View\Components\ModelSelect;
use TomSix\Components\View\Components\Select;
use TomSix\Components\View\Components\Input;
use TomSix\Components\View\Components\TextArea;

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

        $this->registerFormComponents();
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

    private function registerFormComponents(): void
    {
        $this->loadViewComponentsAs('form', [
            Input::class,
            Select::class,
            ModelSelect::class,
            TextArea::class,
            Checkboxes::class,
            Checkbx::class
        ]);

        $this->publishes([
            self::PATH_VIEWS . '/form' => resource_path('views/components/library/form'),
        ], 'form-components');
    }
}
