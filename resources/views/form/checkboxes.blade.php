<div {{ $attributes->merge(['class' => config('library.css.form.group')]) }}>
    @isset($label)
        <label class="{{ config('library.css.form.input.label') }}" for="{{ $name }}">{{ $label }}</label>
    @endisset

    @foreach($options as $i => $option)

        @php
            $key = $optionsAreAssoc ? $i : $loop->iteration
        @endphp

        <x-form-checkbox :name="$name"
                         :id-name="$getIdName($key)"
                         :value="$key"
                         :label="$option"
                         :checked="$isChecked($key)"
                         :inline="$inline" :input-attributes="$inputAttributes" :type="$type"
        />
    @endforeach

    {{ $slot }}

    @if(config('library.inline_errors') && $type === 'radio')
        <input type="hidden" class="{{ config('library.css.form.input.input') }}@error($name) {{ config('library.css.error.inline.input') }}@enderror" />
        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    @endif
</div>
