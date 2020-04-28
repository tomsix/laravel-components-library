<div {{ $attributes->merge(['class' => config('library.css.form.group')]) }}>
    @isset($label)
        <label class="{{ config('library.css.form.label') }}" for="{{ $name }}">{{ $label }}</label>
    @endisset

    @foreach($options as $i => $option)

        @php
            /**
             * @var bool $optionsAreAssoc
             * @var $loop
             */
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
        <input type="hidden" class="form-control @error($name) is-invalid @enderror">
        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    @endif
</div>
