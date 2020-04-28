<div {{ $attributes->merge(['class' => 'form-group']) }}>
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endisset

    @foreach($options as $key => $option)

        @php $i = $optionsAreAssoc ? $key : $loop->iteration @endphp

        <x-form-checkbox :name="$name"
                         :id-name="$getIdName($i)"
                         :value="$i"
                         :label="$option"
                         :checked="$isChecked($i)"
                         :inline="$inline" :disabled="$disabled" :readonly="$readonly"
        />
    @endforeach

    {{ $slot }}

</div>
