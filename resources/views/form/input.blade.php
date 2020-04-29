<div {{ $attributes->merge(['class' => config('library.css.form.group')]) }} >

    @isset($label)
        <label class="{{ config('library.css.form.input.label') }}" for="{{ $name }}">{{ $label }}</label>
    @endisset

    <x-form-input-group :name="$name" :prepend="$prepend" :append="$append">

        <input
            autocomplete="off"
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $name }}"
            class="{{ config('library.css.form.input.input') }} @error($name) {{ config('library.css.error.inline.input') }} @enderror"
            placeholder="{{ $placeholder }}"
            value="{{ old($name, $value) }}"
            {{ $inputAttributes }}
        />

    </x-form-input-group>

    <x-form-error :name="$name" />
</div>
