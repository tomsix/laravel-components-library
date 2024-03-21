<div class="{{ config('library.css.form.group') }}" >

    @isset($labelText)
        <label class="{{ config('library.css.form.input.label') }}" for="{{ $attributes->get('id', $name) }}">{{ $labelText }}</label>
    @endisset

    {{ $label ?? null }}

    <x-form::input-group :name="$name" :prepend="$prependText" :append="$appendText">

        @isset($prepend)
            <x-slot name="prepend">
                {{ $prepend }}
            </x-slot>
        @endisset

        <textarea {{ $attributes->merge(['name' => $name, 'id' => $name])
                            ->class([
                            	config('library.css.form.input.input'),
                            	config('library.css.error.inline.input') => $hasError($name)
                            ]) }}
        >{{ $value ?? ''}}</textarea>

        @isset($append)
            <x-slot name="append">
                {{ $append }}
            </x-slot>
        @endisset

    </x-form::input-group>
</div>
