<div {{ $attributes->merge(['class' => 'form-group']) }}>
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endisset

    @foreach($options as $key => $option)

        <x-form-checkbox :name="$name" :id-name="$name . $loop->iteration" :value="$key" :label="$option" :inline="$inline" :disabled="$disabled" :readonly="$readonly"/>

    @endforeach

    {{ $slot }}

</div>
