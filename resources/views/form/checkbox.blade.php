<div {{ $attributes->class([config('library.css.form.multi.checkbox') => $type === 'checkbox', config('library.css.form.multi.radio') => $type === 'radio']) }}>
    <input class="{{ config('library.css.form.multi.input') }}@if($hasError($name)) {{ config('library.css.error.inline.input') }}@endif"
            type="{{ $type }}" name="{{ $parentName }}" id="{{ $name }}" value="{{ $value }}" {{ $checked }} {{ $inputAttributes }}
    />

    @isset($labelText)
        <label class="{{ config('library.css.form.multi.label') }}" for="{{ $name }}">{{ $labelText }}</label>
    @endisset()

    {!! $label ?? null !!}

    @if($showErrors && $hasError($parentName))
        <x-form::error :name="$parentName"/>
    @endif
</div>
