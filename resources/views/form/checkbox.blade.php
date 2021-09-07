<div @class([
                config('library.css.form.checkbox.div'),
                config('library.css.form.checkbox.inline') => $inline,
                config('library.css.form.checkbox.' . $type)
     ])
>
    <input {{ $attributes->merge(['name' => $parentName, 'id' => $name])
                ->class([
                    config('library.css.form.checkbox.input'),
                    config('library.css.error.inline.input') => $hasError($name)
                ])
            }}
            type="{{ $type === 'radio' ?: 'checkbox' }}"
            {{ $checked }}
    />

    @isset($labelText)
        <label class="{{ config('library.css.form.checkbox.label') }}" for="{{ $name }}">{{ $labelText }}</label>
    @endisset()

    {!! $label ?? null !!}

    @if($showErrors && $hasError($name))
        <x-form::error :name="$parentName"/>
    @endif
</div>
