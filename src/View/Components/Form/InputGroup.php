<?php


namespace TomSix\Components\View\Components\Form;


use Illuminate\View\Component;

class InputGroup extends Component
{
    /**
     * Specifies the name
     *
     * @var string $name
     */
    public string $name;

    /**
     * Set a Bootstrap prepend to the input
     *
     * @var string|null $prepend
     */
    public ?string $prepend;

    /**
     * Set a Bootstrap append to the input
     *
     * @var string|null $append
     */
    public ?string $append;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $prepend
     * @param string|null $append
     */
    public function __construct(string $name, ?string $prepend = null, ?string $append = null)
    {
        $this->name = $name;
        $this->prepend = $prepend;
        $this->append = $append;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function render()
    {
        return view('laravel-components-library::form.input-group');
    }
}
