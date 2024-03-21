<?php

namespace TomSix\Components\View\Components\Form;

use TomSix\Components\View\Components\Component;
use TomSix\Components\View\Components\Traits\HandlesValidationErrors;

abstract class FormComponent extends Component
{
    use HandlesValidationErrors;

    /**
     * Specifies the name.
     *
     * @var string
     */
    public string $name;

    /**
     * The label text. There will no label rendered if it isn't provided.
     *
     * @var string|null
     */
    public ?string $labelText;

    /**
     * Define a default value.
     *
     * @var mixed
     */
    public $value;

	/**
	 * Create a new component instance.
	 *
	 * @param string $name
	 * @param string|null $label
	 * @param mixed $value
	 * @param bool|null $showErrors
	 */
    public function __construct(string $name, ?string $label = null, $value = null, bool $showErrors = null)
    {
		parent::__construct('form');

        $this->name = $name;
        $this->labelText = $label;
		$this->value = request()->hasSession()
			? request()->old($this->convertBracketsToDots($name), $value)
			: $value;
		$this->showErrors = $showErrors ?? config('library.inline_errors');
    }
}
