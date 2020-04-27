<div {{ $attributes->merge(['class' => 'form-check ' . $inline]) }}>
    <input class="form-check-input" type="checkbox" name="{{ $name }}" id="{{ $idName }}" value="{{ $value }}">
    @isset($label)
        <label class="form-check-label" for="{{ $idName }}">
            {{ $label }}
        </label>
    @endisset()
</div>

