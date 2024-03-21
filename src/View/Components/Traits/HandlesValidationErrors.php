<?php

namespace TomSix\Components\View\Components\Traits;

use Illuminate\Contracts\Support\MessageBag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\Support\ViewErrorBag;
use function request;

trait HandlesValidationErrors
{
    public bool $showErrors;

    /**
     * Getter for the ErrorBag.
     *
     * @param string $bag
     * @return MessageBag
     */
    protected function getErrorBag(string $bag = 'default'): MessageBag
    {
        $bags = View::shared('errors', fn () => session()->get('errors', new ViewErrorBag));

        return $bags->getBag($bag);
    }

    /**
     * Returns a boolean whether the given attribute has an error.
     *
     * @param string $name
     * @param string $bag
     * @return boolean
     */
    public function hasError(string $name, string $bag = 'default'): bool
    {
        $name = str_replace(['[', ']'], ['.', ''], Str::before($name, '[]'));

        $errorBag = $this->getErrorBag($bag);

        return $errorBag->has($name) || $errorBag->has("$name.*");
    }
}
