<div {{ $attributes->merge(['class' => config('library.css.form.group')]) }} >

    @isset($label)
        <label class="{{ config('library.css.form.input.label') }}" for="{{ $name }}">{{ $label }}</label>
    @endisset

    <x-form-input-group :name="$name" :prepend="$prepend" :append="$append">

        <textarea
            name="{{ $name }}"
            id="{{ $name }}"
            class="{{ config('library.css.form.input.input') }}@error($name) {{ config('library.css.error.inline.input') }}@enderror"
            @if($placeholder != '') placeholder="{{ $placeholder }}"@endif
            {{ $inputAttributes }}
        >@isset($value){{ $value }}@endisset</textarea>

    </x-form-input-group>

    <x-form-error :name="$name" />

</div>
