<div class="{{ config('library.css.form.group') }}">

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
                         :inline="$inline" :type="$type"
                          {{ $attributes }}
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
