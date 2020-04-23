<?php


namespace TomSix\Components\View\Components;


use Illuminate\View\Component;

abstract class InputField extends Component
{
    /**
     * Specifies the name
     *
     * @var string $name
     */
    public string $name;

    /**
     * The label text. There will no label rendered if it isn't provided
     *
     * @var string|null $label
     */
    public ?string $label;

    /**
     * Specifies the placeholder
     *
     * @var string $placeholder
     */
    public string $placeholder;

    /**
     * Define a default value
     *
     * @var mixed $value
     */
    public $value;

    /**
     * Set the type of the input
     *
     * @var string $type
     */
    public string $type;

    /**
     * Specifies the required attribute
     *
     * @var string $required
     */
    public string $required;

    /**
     * Specifies the disabled attribute
     *
     * @var string $disabled
     */
    public string $disabled;

    /**
     * Specifies the readonly attribute
     *
     * @var string $readonly
     */
    public string $readonly;

    /**
     * InputField constructor.
     * @param string $name
     * @param string|null $label
     * @param string|null $placeholder
     * @param string|null $type
     * @param bool $required
     * @param bool $disabled
     * @param bool $readonly
     * @param mixed|null $value
     */
    public function __construct(string $name, ?string $label = null, ?string $placeholder = null, ?string $type = null, bool $required = false, bool $disabled = false, bool $readonly = false, $value = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder ?? '';
        $this->required = $required ? 'required' : '';
        $this->disabled = $disabled ? 'disabled' : '';
        $this->readonly = $readonly ? 'readonly' : '';
        $this->value = $value ?? '';
        $this->type = $type ?? 'text';
    }
}
