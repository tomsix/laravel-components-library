<div {{ $attributes->merge(['class' => 'form-group']) }}>
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endisset
    <textarea
            name="{{ $name }}"
            id="{{ $name }}"
            class="form-control @error($name) is-invalid @enderror"
            placeholder="{{ $placeholder }}"
            {{ $required }} {{ $disabled }} {{ $readonly }}
    >{{ old($name, $value) }}</textarea>
    @error($value)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
