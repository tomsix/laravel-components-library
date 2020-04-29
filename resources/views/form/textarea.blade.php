<div {{ $attributes->merge(['class' => config('library.css.form.group')]) }} >

    @isset($label)
        <label class="{{ config('library.css.form.label') }}" for="{{ $name }}">{{ $label }}</label>
    @endisset

    <x-form-input-group :name="$name" :prepend="$prepend" :append="$append">

        <textarea
            name="{{ $name }}"
            id="{{ $name }}"
            class="{{ config('library.css.form.input') }} @error($name) {{ config('library.css.error.inline.input') }} @enderror"
            placeholder="{{ $placeholder }}"
            {{ $inputAttributes }}
        >{{ old($name, $value) }}</textarea>

    </x-form-input-group>

    <x-form-error :name="$name" />

</div>
