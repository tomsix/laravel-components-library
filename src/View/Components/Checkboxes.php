<?php


namespace TomSix\Components\View\Components;


class Checkboxes extends FromGroup
{
    /**
     * If the checkboxes must be inline
     *
     * @var bool $inline
     */
    public bool $inline;

    /**
     * A list of given options
     *
     * @var iterable $options
     */
    public iterable $options;

    /**
     * The type of the checkbox/radio button
     *
     * @var string $type
     */
    public string $type;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $label
     * @param array|iterable $options
     * @param bool $inline
     * @param bool $disabled
     * @param bool $readonly
     * @param iterable|string|int $value
     * @param string $type
     */
    public function __construct(string $name, ?string $label = null, iterable $options = [], bool $inline = false, bool $disabled = false, bool $readonly = false, $value = null, string $type = 'checkbox')
    {
        parent::__construct($name, $label, $disabled, $readonly, $value);

        $this->inline = $inline;
        $this->options = $options;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('library::form.checkboxes');
    }

    /**
     * Determine if the value is checked
     *
     * @param $option
     * @return bool
     */
    public function isChecked($option): bool
    {
        if(is_string($this->value) || is_numeric($this->value))
        {
            return $option == $this->value;
        }

        if (is_array($this->value))
        {
            return in_array($option, $this->value);
        }

        return false;
    }
}
