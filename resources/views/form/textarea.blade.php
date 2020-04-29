<x-form-group :name="$name" :label="$label" >

    @slot('attributes'){{ $attributes->merge(['class' => config('library.css.form.group')]) }}@endslot

    <textarea
            name="{{ $name }}"
            id="{{ $name }}"
            class="{{ config('library.css.form.input') }} @error($name) {{ config('library.css.error.inline.input') }} @enderror"
            placeholder="{{ $placeholder }}"
            {{ $inputAttributes }}
    >{{ old($name, $value) }}</textarea>

</x-form-group>
