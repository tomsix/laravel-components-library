<?php

namespace TomSix\Components\View\Components\Form;

use Illuminate\Support\Collection;

class Select extends Input
{
    /**
     * A list with the value and text of the select options.
     *
     * @var array
     */
    public iterable $options;

    /**
     * Create a new component instance.
     *
     * @param string           $name
     * @param array|Collection $options
     * @param string|null      $label
     * @param string|int|null  $value
     * @param string|null      $prepend
     * @param string|null      $append
     */
    public function __construct(string $name, iterable $options = [], ?string $label = null, $value = null, ?string $prepend = null, ?string $append = null)
    {
        parent::__construct($name, $label, $value, $prepend, $append);

        $this->options = $options;
    }

    /**
     * Determine if the given option is the current selected option.
     *
     * @param string|int $option
     *
     * @return bool
     */
    public function isSelected($option): bool
    {
		$old = old($this->name, $this->value);

		if (is_array($old) && in_array($option, $old)) {
			return true;
		}

		return $option == old($this->name, $this->value);
    }
}
