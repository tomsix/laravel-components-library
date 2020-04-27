<div {{ $attributes->merge(['class' => 'form-group']) }}>
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endisset

    <select name="{{ $name }}" id="{{ $name }}" class="form-control @error($name) is-invalid @enderror" {{ $disabled }} {{ $readonly }}>

        {{ $slot }}

        @foreach ($options as $key => $option)
            <option value="{{ $key }}" {{ $key == old($name, $value) ? 'selected' : '' }}>
                {{ $option }}
            </option>
        @endforeach

    </select>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
