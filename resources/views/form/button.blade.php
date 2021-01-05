<div {{ $attributes }}>

    <button name="{{ $name }}"
            type="{{ $type }}"
            value="{{ $value }}"
            class="{{ config('library.css.form.button') }} {{ config('library.css.form.button') . '-' . $color }}"
            {{ $inputAttributes }}
    >
        {{ $label ?? ($value ? $value : $name) }}
    </button>

</div>
