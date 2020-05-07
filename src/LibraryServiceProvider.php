<?php

namespace TomSix\Components;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use TomSix\Components\View\Components\Form\Button;
use TomSix\Components\View\Components\Form\Checkbox;
use TomSix\Components\View\Components\Form\Checkboxes;
use TomSix\Components\View\Components\Form\Error;
use TomSix\Components\View\Components\Form\Errors;
use TomSix\Components\View\Components\Form\File;
use TomSix\Components\View\Components\Form\Input;
use TomSix\Components\View\Components\Form\InputGroup;
use TomSix\Components\View\Components\Form\ModelSelect;
use TomSix\Components\View\Components\Form\Select;
use TomSix\Components\View\Components\Form\Textarea;
use TomSix\Components\View\Components\Navigation\Item;
use TomSix\Components\View\Components\Navigation\Label;

class LibraryServiceProvider extends ServiceProvider
{
    /** @var string  */
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

        $this->loadViewsFrom(self::PATH_VIEWS, 'laravel-components-library');

        $this
            ->registerFormComponents()
            ->registerNavigationComponents()
            ->registerComponetsPublishers();
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
     * Register the Blade form components
     *
     * @return $this
     */
    private function registerFormComponents(): self
    {
        $this->loadViewComponentsAs('form', [
            'input' => Input::class,
            'input-group' => InputGroup::class,
            'select' => Select::class,
            'model-select' => ModelSelect::class,
            'textarea' => Textarea::class,
            'checkboxes' => Checkboxes::class,
            'checkbox' => Checkbox::class,
            'file' => File::class,
            'button' => Button::class,
            'errors' => Errors::class,
            'error' => Error::class
        ]);

        return $this;
    }

    /**
     * Register the Blade navigation components
     *
     * @return $this
     */
    private function registerNavigationComponents(): self
    {
        $this->loadViewComponentsAs('navigation', [
            'item' => Item::class,
            'label' => Label::class
        ]);

        return $this;
    }

    /**
     * Register the publishers of the component resources
     *
     * @return $this
     */
    public function registerComponetsPublishers(): self
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

    /**
     * Register the given view components with a custom prefix and alias.
     *
     * @param  string  $prefix
     * @param  array  $components
     * @return void
     */
    protected function loadViewComponentsAs($prefix, array $components)
    {
        $this->callAfterResolving(BladeCompiler::class, function ($blade) use ($prefix, $components) {
            foreach ($components as $alias => $component) {
                $blade->component($component, is_numeric($alias) ? null : $alias, $prefix);
            }
        });
    }
}
