<div {{ $attributes->merge(['class' => 'custom-file']) }}>

    <label class="{{ 'custom-file-label' }}" for="{{ $name }}">@isset($label){{ $label }}@endisset</label>

    <input type="file"
        name="{{ $name }}"
        id="{{ $name }}"
        class="{{ 'custom-file-input' }} @error($name) {{ config('library.css.error.inline.input') }} @enderror"
        placeholder="{{ $placeholder }}"
        {{ $inputAttributes }}
    />

    @if(config('library.inline_errors'))
        @error($name)
            <div class="{{ config('library.css.error.inline.div') }}">
                {{ $message }}
            </div>
        @enderror
    @endif
</div>
