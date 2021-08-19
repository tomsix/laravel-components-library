<div {{ $attributes->merge(['class' => config('library.css.form.group')]) }} >

    @isset($labelText)
        <label class="{{ config('library.css.form.file.label') }}" for="{{ $name }}">{{ $labelText }}</label>
    @endisset

    @isset($label)
        {!! $label !!}
    @endisset

    <x-form::input-group :name="$name" :prepend="$prepend" :append="$append">

        <textarea
            name="{{ $name }}"
            id="{{ $name }}"
            class="{{ config('library.css.form.input.input') }}@error($name) {{ config('library.css.error.inline.input') }}@enderror"
            @if($placeholder != '') placeholder="{{ $placeholder }}"@endif
            {{ $inputAttributes }}
        >@isset($value){{ $value }}@endisset</textarea>

    </x-form::input-group>

</div>
