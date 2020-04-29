<?php

namespace TomSix\Components\View\Components;


class Select extends BaseInput
{
    /**
     * A list with the value and text of the select options
     *
     * @var iterable $options
     */
	public iterable $options;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param iterable $options
     * @param string|null $label
     * @param array|string $inputAttributes
     * @param string|int|null $value
     * @param string|null $prepend
     * @param string|null $append
     */
	public function __construct(string $name, iterable $options, ?string $label = null, $inputAttributes = [], $value = null, ?string $prepend = null, ?string $append = null)
    {
        parent::__construct($name, $label, $inputAttributes, $value, $prepend, $append);

        $this->options = $options;
    }

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render()
	{
		return view('library::form.select');
	}

    /**
     * Determine if the given option is the current selected option.
     *
     * @param  string|int  $option
     * @return string
     */
    public function isSelected($option): string
    {
        return $option == old($this->name, $this->value) ? 'selected' : '';
    }
}
