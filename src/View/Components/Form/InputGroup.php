<?php

namespace TomSix\Components\View\Components\Form;

use TomSix\Components\View\Components\Component;

class InputGroup extends Component
{
    use HandlesValidationErrors;

    /**
     * Specifies the name.
     *
     * @var string
     */
    public string $name;

    /**
     * Set a Bootstrap prepend to the input.
     *
     * @var string|null
     */
    public ?string $prepend;

    /**
     * Set a Bootstrap append to the input.
     *
     * @var string|null
     */
    public ?string $append;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string|null  $prepend
     * @param  string|null  $append
     * @param  bool|null  $showErrors
     */
    public function __construct(string $name, ?string $prepend = null, ?string $append = null, ?bool $showErrors = null)
    {
    	parent::__construct('form');

        $this->name = $name;
        $this->prepend = $prepend;
        $this->append = $append;
        $this->showErrors = $showErrors ?? config('library.inline_errors');
    }
}
