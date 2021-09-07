<?php

namespace TomSix\Components\View\Components\Form;

use Illuminate\Support\Collection;

class Checkboxes extends FormComponent
{
    /**
     * If the checkboxes must be inline.
     *
     * @var bool
     */
    public bool $inline;

    /**
     * A list of given options.
     *
     * @var array
     */
    public array $options;

    /**
     * Set the type of the input.
     *
     * @var string
     */
    public string $type;

	/**
	 * Create a new component instance.
	 *
	 * @param string $name
	 * @param array|Collection $options
	 * @param bool $inline
	 * @param null $value
	 * @param string $type
	 * @param bool|null $showErrors
	 */
    public function __construct(string $name, $options = [], bool $inline = false, $value = null, string $type = 'checkbox', ?bool $showErrors = null)
    {
        parent::__construct($name, null, $value, $showErrors);

        $this->inline = $inline;
        $this->options = $options instanceof Collection ? $options->toArray() : $options;
        $this->type = $type;
    }
}
