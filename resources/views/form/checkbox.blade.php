<div @class([
                config('library.css.form.checkbox.div'),
                config('library.css.form.checkbox.inline') => $inline,
                config('library.css.form.checkbox.' . $type)
     ])
>
    {{ $before ?? null  }}

    <input {{ $attributes->merge(['id' => $name])
                ->class([
                    config('library.css.form.checkbox.input'),
                    config('library.css.error.inline.input') => $hasError($name)
                ])
            }}
            name="{{ $name }}"
            value="{{ $value }}"
            type="{{ $type === 'radio' ? 'radio' : 'checkbox' }}"
            {{ $checked  ? 'checked' : '' }}
    />

    @isset($labelText)
        <label class="{{ config('library.css.form.checkbox.label') }}" for="{{ $attributes->get('id', $name) }}">{{ $labelText }}</label>
    @endisset()

    @if($showErrors && $hasError($name))
        <x-form::error :name="$name" />
    @endif

    {{ $after ?? null }}
</div>
