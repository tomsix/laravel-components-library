<div {{ $attributes->merge(['class' => config('library.css.form.group')]) }} >

    @isset($labelText)
        <label class="{{ config('library.css.form.file.label') }}" for="{{ $name }}">{{ $labelText }}</label>
    @endisset

    @isset($label)
        {!! $label !!}
    @endisset

    <x-form::input-group :name="$name" :prepend="$prepend" :append="$append">

        <select
            name="{{ $name }}"
            id="{{ $name }}"
            class="{{ config('library.css.form.select') }}@error($name) {{ config('library.css.error.inline.input') }}@enderror"
            @if(config('library.css.form.select') === 'custom-select') style="flex: 1 1 0;"@endif
            {{ $inputAttributes }}
        >

            {{ $slot }}

            @foreach ($options as $key => $option)
                <option value="{{ $key }}" {{ $isSelected($key) }}>
                    {{ $option }}
                </option>
            @endforeach

        </select>

    </x-form::input-group>
</div>
