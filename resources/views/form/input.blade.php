<div class="{{ config('library.css.form.group') }}" >

    @isset($labelText)
        <label class="{{ config('library.css.form.input.label') }}" for="{{ $attributes->get('id', $name) }}">{{ $labelText }}</label>
    @endisset

    {!! $label ?? null !!}

    <x-form::input-group :name="$name" :prepend="$prepend" :append="$append">

        <input {{ $attributes->merge(['type' => 'text', 'name' => $name, 'id' => $name])
                            ->class([
                            	config('library.css.form.input.input'),
                            	config('library.css.error.inline.input') => $hasError($name)
                            ]) }}
            @isset($value) value="{{ $value }}"@endisset
        />

    </x-form::input-group>
</div>
