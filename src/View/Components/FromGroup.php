<?php


namespace TomSix\Components\View\Components;


use Illuminate\View\Component;

abstract class FromGroup extends Component
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
     * Define a default value
     *
     * @var mixed $value
     */
    public $value;

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
     * @param bool $disabled
     * @param bool $readonly
     * @param mixed $value
     */
    public function __construct(string $name, ?string $label = null, bool $disabled = false, bool $readonly = false, $value = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->disabled = $disabled ? 'disabled' : '';
        $this->readonly = $readonly ? 'readonly' : '';
        $this->value = old($this->nameWithoutBrackets(), $value) ?? '';
    }

    public function nameWithoutBrackets()
    {
        return str_replace('[]', '', $this->name);
    }
}
