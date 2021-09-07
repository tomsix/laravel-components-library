<?php

namespace TomSix\Components\View\Components\Form;

use TomSix\Components\View\Components\Component;

class Form extends Component
{
    /**
     * Request method.
     */
    public string $method;

    /**
     * Form method spoofing to support PUT, PATCH and DELETE actions.
     * https://laravel.com/docs/master/routing#form-method-spoofing
     */
    public bool $spoofMethod = false;

    /**
     * Create a new component instance.
     *
     * @param  string  $method
     */
    public function __construct(string $method = 'POST')
    {
		parent::__construct('form');

        $this->method = strtoupper($method);

        $this->spoofMethod = in_array($this->method, ['PUT', 'PATCH', 'DELETE']);
    }
}