<?php

namespace TomSix\Components;

use Illuminate\Support\ServiceProvider;
use TomSix\Components\Form\TextFieldComponent;

class ComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources', 'blade-components');

        $this->loadViewComponentsAs('form', [
            TextFieldComponent::class
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
