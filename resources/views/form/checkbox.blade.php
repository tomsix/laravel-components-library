<div class="{{ config('library.css.form.checkbox.div') }}@if($inline) {{ config('library.css.form.checkbox.inline') }}@endif">
    <input {{ $attributes->merge(['type' => 'checkbox', 'name' => $parentName, 'id' => $name])
                ->class([
                    config('library.css.form.checkbox.input'),
                    config('library.css.error.inline.input') => $hasError($name)
                ])
            }}
            {{ $checked }}
    />

    @isset($labelText)
        <label class="{{ config('library.css.form.checkbox.label') }}" for="{{ $name }}">{{ $labelText }}</label>
    @endisset()

    {!! $label ?? null !!}

    @if($showErrors && $hasError($parentName))
        <x-form::error :name="$parentName"/>
    @endif
</div>
