<div {{ $attributes->merge(['class' => $cssClass]) }}>

    <input class="{{ config('library.css.form.checkbox.input') }}@error($errorName()) {{ config('library.css.error.inline.input') }}@enderror"
           type="{{ $type }}" name="{{ $name }}" id="{{ $idName }}" value="{{ $value }}" {{ $checked }} {{ $inputAttributes }}
    />

    @isset($label)
        <label class="{{ config('library.css.form.checkbox.label') }}" for="{{ $idName }}">
            {{ $label }}
        </label>
    @endisset()

    <x-form-error :name="$errorName" />
</div>
