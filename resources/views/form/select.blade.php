<div {{ $attributes->class([config('library.css.form.group')]) }} >

    @isset($labelText)
        <label class="{{ config('library.css.form.label') }}" for="{{ $attributes->get('id', $name) }}">{{ $labelText }}</label>
    @endisset

    @isset($label)
        {!! $label !!}
    @endisset

    <x-form::input-group :name="$name" :prepend="$prependText" :append="$appendText">

        @isset($prepend)
            <x-slot name="prepend">
                {{ $prepend }}
            </x-slot>
        @endisset

        <select {{ $attributes->merge(['type' => 'text', 'name' => $name, 'id' => $name])
                            ->class([
                            	config('library.css.form.select'),
                            	config('library.css.error.inline.input') => $hasError($name)
                            ]) }}
        >

            {{ $slot }}

            @foreach ($options as $key => $option)
                <option value="{{ $key }}" {{ $isSelected($key) ? 'selected' : '' }}>
                    {{ $option }}
                </option>
            @endforeach

        </select>

        @isset($append)
            <x-slot name="append">
                {{ $append }}
            </x-slot>
        @endisset

    </x-form::input-group>
</div>
