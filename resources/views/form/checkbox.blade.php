<div {{ $attributes->merge(['class' => 'form-check ' . $inline]) }}>

    <input class="form-check-input @error($errorName) is-invalid @enderror"
           type="{{ $type }}" name="{{ $name }}" id="{{ $idName }}" value="{{ $value }}" {{ $checked }} {{ $required }} {{ $disabled }} {{ $readonly }}
    />

    @isset($label)
        <label class="form-check-label" for="{{ $idName }}">
            {{ $label }}
        </label>
    @endisset()

    @error($errorName)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
