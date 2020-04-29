<x-form-group :name="$name" :label="$label" >

    @slot('attributes')
        {{ $attributes->merge(['class' => config('library.css.form.group')]) }}
    @endslot

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

</x-form-group>
