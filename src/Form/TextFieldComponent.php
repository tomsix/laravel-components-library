<?php


namespace TomSix\Components\Form;


use Illuminate\View\Component;

class TextFieldComponent extends Component
{

    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('blade-components::components.form.text-field');
    }
}
