<div {{ $attributes->merge(['class' => config('library.css.form.group')]) }}>
    <button name="{{ $name }}"
            type="{{ $type }}"
            value="{{ $value }}"
            class="{{ config('library.css.form.button') }} {{ config('library.css.form.button') . '-' . $color }}"
    >
        {{ $label ?? ($value ? $value : $name) }}
    </button>
</div>
