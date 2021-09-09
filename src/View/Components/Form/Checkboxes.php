<?php

namespace TomSix\Components\View\Components\Form;

use Illuminate\Support\Enumerable;

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
    public iterable $options;

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
	 * @param iterable $options
	 * @param bool $inline
	 * @param null $value
	 * @param string $type
	 * @param bool|null $showErrors
	 */
    public function __construct(string $name, iterable $options = [], bool $inline = false, $value = null, string $type = 'checkbox', ?bool $showErrors = null)
    {
        parent::__construct($name, null, $value, $showErrors);

        $this->inline = $inline;
        $this->options = $options;
        $this->type = $type;
    }

	/**
	 * Determine if the value is checked.
	 * @param string|int $key
	 *
	 * @return bool
	 */
	public function isChecked($key): bool
	{
		if ($this->value instanceof Enumerable) {
			return $this->value->contains($key);
		}

		if (is_array($this->value)) {
			return in_array($key, $this->value);
		}

		return false;
	}
}
