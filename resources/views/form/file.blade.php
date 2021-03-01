<div {{ $attributes->merge(['class' => config('library.css.form.file.group')]) }}>

    <label class="{{ config('library.css.form.file.label') }}" for="{{ $name }}">@isset($label){{ $label }}@endisset</label>

    <x-form-input-group :name="$name" :prepend="$prepend" :append="$append">

        <input type="file"
               name="{{ $name }}"
               id="{{ $name }}"
               class="{{ config('library.css.form.file.input') }}@error($name) {{ config('library.css.error.inline.input') }}@enderror"
            {{ $inputAttributes }}
        />

    </x-form-input-group>

</div>
