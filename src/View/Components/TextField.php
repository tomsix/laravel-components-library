<?php


namespace TomSix\Components\View\Components;


use Illuminate\View\Component;

class TextField extends Component
{
    /**
     * The input name
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
     * The text for the placeholder
     *
     * @var string $placeholder
     */
    public string $placeholder;

    /**
     * Set the input as required
     *
     * @var string $required
     */
    public string $required;

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

    public function __construct(string $name, ?string $label = null, ?string $placeholder = null, bool $required = false, $value = null, string $type = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder ?? '';
        $this->required = $required ? 'required' : '';
        $this->value = $value ?? '';
        $this->type = $type ?? 'text';
    }

    public function render()
    {
        return view('library::text-field');
    }
}
