<div class="{{ config('library.css.form.floating') }}" >

    <input {{ $attributes->merge(['type' => 'text', 'name' => $name, 'id' => $name, 'placeholder' => $name])
                        ->class([
                            config('library.css.form.input.input'),
                            config('library.css.error.inline.input') => $hasError($name)
                        ]) }}
        @isset($value) value="{{ $value }}"@endisset
    />

    @isset($labelText)
        <label class="{{ config('library.css.form.input.label') }}" for="{{ $attributes->get('id', $name) }}">{{ $labelText }}</label>
    @endisset

    {!! $label ?? null !!}

    @if($showErrors && $hasError($name))
        <x-form::error :name="$name" />
    @endif
</div>
