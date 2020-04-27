<div {{ $attributes->merge(['class' => 'form-check ' . $inline]) }}>
    <input class="form-check-input" type="{{ $type }}" name="{{ $name }}" id="{{ $idName }}" value="{{ $value }}" {{ $checked }} {{ $disabled }} {{ $readonly }}">
    @isset($label)
        <label class="form-check-label" for="{{ $idName }}">
            {{ $label }}
        </label>
    @endisset()
</div>
