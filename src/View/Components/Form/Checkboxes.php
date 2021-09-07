<?php

namespace TomSix\Components\View\Components\Form;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

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
     * Checks if the options ar an associative array.
     *
     * @var bool
     */
    public bool $optionsAreAssoc;

    /**
     * Set the type of the input.
     *
     * @var string
     */
    public string $type;

    /**
     * Create a new component instance.
     *
     * @param string              $name
     * @param array|Collection    $options
     * @param bool                $inline
     * @param iterable|string|int $value
     * @param string              $type
     */
    public function __construct(string $name, $options = [], bool $inline = false, $value = null, string $type = 'checkbox')
    {
        parent::__construct($name, null, $value);

        $this->inline = $inline;
        $this->options = $options instanceof Collection ? $options->toArray() : $options;
        $this->optionsAreAssoc = Arr::isAssoc($this->options);
        $this->type = $type;
    }

    /**
     * Determine if the value is checked.
     *
     * @param $option
     *
     * @return bool
     */
    public function isChecked($option): bool
    {
        if (is_string($this->value) || is_numeric($this->value)) {
            return $option == $this->value;
        }

        if (is_array($this->value)) {
            return in_array($option, $this->value);
        }

        return false;
    }

    /**
     * @param string|int $key
     *
     * @return string
     */
    public function getChildName($key): string
    {
        if (Str::endsWith($this->name, '[]')) {
            $name = Str::before($this->name, '[]');

            return $name . '[' . $key . ']';
        }

        return $this->name.$key;
    }
}
