<div {{ $attributes }}>

    <button name="{{ $name }}"
            type="{{ $type }}"
            @isset($value) value="{{ $value }}"@endisset
            class="{{ config('library.css.form.button') }} {{ config('library.css.form.button') . '-' . $color }}"
            {{ $inputAttributes }}
    >
        {{ $labelText ?? ($value ? $value : $name) }}
    </button>

</div>
