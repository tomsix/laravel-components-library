<div {{ $attributes->merge(['class' => config('library.css.form.group')]) }}>
    @isset($label)
        <label class="{{ config('library.css.form.label') }}" for="{{ $name }}">{{ $label }}</label>
    @endisset

    <textarea
            name="{{ $name }}"
            id="{{ $name }}"
            class="{{ config('library.css.form.input') }} @error($name) {{ config('library.css.error.inline.input') }} @enderror"
            placeholder="{{ $placeholder }}"
            {{ $inputAttributes }}
    >{{ old($name, $value) }}</textarea>

    @if(config('library.inline_errors'))
        @error($name)
        <div class="{{ config('library.css.error.inline.div') }}">
            {{ $message }}
        </div>
        @enderror
    @endif
</div>
