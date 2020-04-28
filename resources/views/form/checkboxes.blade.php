<div {{ $attributes->merge(['class' => 'form-group']) }}>
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
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
                         :inline="$inline" :disabled="$disabled" :readonly="$readonly" :type="$type"
        />
    @endforeach

    {{ $slot }}

    @if($type === 'radio')
        <input type="hidden" class="form-control @error($name) is-invalid @enderror">
        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    @endif
</div>
