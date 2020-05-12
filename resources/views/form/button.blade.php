<div {{ $attributes }}>

    <button @isset($name) name="{{ $name }}" @endisset
            type="{{ $type }}"
            value="{{ $value }}"
            class="{{ config('library.css.form.button') }} {{ config('library.css.form.button') . '-' . $color }}"
    >
        {{ $label ?? ($value ? $value : $name) }}
    </button>

</div>
