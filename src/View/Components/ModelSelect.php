<?php

namespace TomSix\Components\View\Components;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ModelSelect extends Select
{
    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param Collection|null $models
     * @param string|null $label
     * @param bool $disabled
     * @param bool $readonly
     * @param Model|string|int $value
     * @param string $keyAttribute
     * @param string $valueAttribute
     */
	public function __construct(string $name, ?Collection $models = null, ?string $label = null, bool $disabled = false, bool $readonly = false, $value = null, string $keyAttribute = 'id', string $valueAttribute = 'name')
    {
        $options = $models ? $models->pluck($valueAttribute, $keyAttribute) : [];

        if(isset($value) && $value instanceof Model)
        {
            $value = $value->getAttribute($keyAttribute);
        }

        parent::__construct($name, $options, $label, $disabled, $readonly, $value);
    }
}
