<div {{ $attributes->merge(['class' => config('library.css.form.group')]) }}>
    @isset($label)
        <label class="{{ config('library.css.form.label') }}" for="{{ $name }}">{{ $label }}</label>
    @endisset

    <select name="{{ $name }}"
            id="{{ $name }}"
            class="{{ config('library.css.form.input') }} @error($name) {{ config('library.css.error.inline.input') }} @enderror"
            {{ $inputAttributes }}
    >

        {{ $slot }}

        @foreach ($options as $key => $option)
            <option value="{{ $key }}" {{ $isSelected($key) }}>
                {{ $option }}
            </option>
        @endforeach

    </select>

    @if(config('library.inline_errors'))
        @error($name)
        <div class="{{ config('library.css.error.inline.div') }}">
            {{ $message }}
        </div>
        @enderror
    @endif
</div>
