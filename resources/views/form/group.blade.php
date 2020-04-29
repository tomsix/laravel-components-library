<div {{ $attributes }}>

    @isset($label)
        <label class="{{ config('library.css.form.label') }}" for="{{ $name }}">{{ $label }}</label>
    @endisset

    {{ $slot }}

    @if(config('library.inline_errors'))
        @error($name)
        <div class="{{ config('library.css.error.inline.div') }}">
            {{ $message }}
        </div>
        @enderror
    @endif
</div>
