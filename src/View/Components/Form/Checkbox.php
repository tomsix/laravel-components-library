<?php

namespace TomSix\Components\View\Components\Form;

use Illuminate\Support\Str;

class Checkbox extends FormComponent
{
	/**
	 * @var string
	 */
	public string $type;

    /**
     * @var string
     */
    public string $parentName;

    /**
     * Show the checkboxes inline
     *
     * @var bool
     */
    public bool $inline;

    /**
     * Set the 'checked' attribute if checked.
     *
     * @var string
     */
    public string $checked;

	/**
	 * Create a new component instance.
	 *
	 * @param string $name
	 * @param string $type
	 * @param string|null $parentName
	 * @param string|null $label
	 * @param bool $inline
	 * @param bool $checked
	 * @param bool|null $showErrors
	 */
    public function __construct(
        string $name,
		string $type = 'checkbox',
        ?string $parentName = null,
        ?string $label = null,
        bool $inline = false,
        ?bool $checked = false,
        ?bool $showErrors = null
    ) {
        parent::__construct($name, $label, $showErrors);

		$this->type = $type;
        $this->parentName = $parentName ?? $this->name;
        $this->inline = $inline;
        $this->checked = $checked ? 'checked' : '';
    }

    public function errorName(): string
    {
        if (Str::endsWith($this->name, '[]')) {
            return $this->convertBracketsToDots($this->name);
        }

        return $this->parentName;
    }
}
