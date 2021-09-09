<?php

namespace TomSix\Components\View\Components\Form;

class Checkbox extends FormComponent
{
	/**
	 * @var string
	 */
	public string $type;

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
	 * @param string|int $value
	 * @param string $type
	 * @param string|null $label
	 * @param bool $inline
	 * @param bool $checked
	 * @param bool|null $showErrors
	 */
    public function __construct(
        string $name,
		$value,
		string $type = 'checkbox',
        ?string $label = null,
        bool $inline = false,
        ?bool $checked = null,
        ?bool $showErrors = null
    ) {
        parent::__construct($name, $label, null, $showErrors);

		$this->value = $value;
		$this->type = $type;
        $this->inline = $inline;
        $this->checked = $checked ?? $this->isChecked();
    }

	/**
	 * Determine if the value is checked.
	 *
	 *
	 * @return bool
	 */
	public function isChecked(): bool
	{
		$value = old($this->convertBracketsToDots($this->name));

		if (is_array($value)) {
			return in_array($this->value, $value);
		}

		return $value == $this->value;
	}
}
