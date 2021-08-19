<div {{ $attributes->merge(['class' => config('library.css.form.group')]) }}>
    @isset($labelText)
        <label class="{{ config('library.css.form.input.label') }}" for="{{ $name }}">{{ $labelText }}</label>
    @endisset

    {!! $label ?? null !!}

    @foreach($options as $i => $option)

        @php
            $key = $optionsAreAssoc ? $i : $loop->iteration
        @endphp

        <x-form::checkbox :name="$getChildName($key)"
                         :parent-name="$name"
                         :value="$key"
                         :label="$option"
                         :checked="$isChecked($key)"
                         :inline="$inline" :input-attributes="$inputAttributes" :type="$type"
        />
    @endforeach

    {{ $slot }}

{{--    <input type="hidden" class="{{ config('library.css.form.input.input') }}@error($name) {{ config('library.css.error.inline.input') }}@enderror" />
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror--}}
</div>
