<div {{ $attributes->merge(['class' => 'form-group']) }}>
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endisset
    @yield('input')
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
