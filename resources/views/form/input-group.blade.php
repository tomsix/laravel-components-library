<div {{ $attributes->class([config('library.css.form.input.group')]) }} >

    @isset($prepend)
        {{ $prepend }}
    @elseif(isset($prependText))
        <div class="{{ config('library.css.form.input.prepend') }}">
            <div class="{{ config('library.css.form.input.text') }}">{{ $prependText }}</div>
        </div>
    @endisset

    {{ $slot }}

    @isset($append)
        {{ $append }}
    @elseif(isset($appendText))
        <div class="{{ config('library.css.form.input.append') }}">
            <div class="{{ config('library.css.form.input.text') }}">{{ $appendText }}</div>
        </div>
    @endisset

    @if($showErrors && $hasError($name))
        <x-form::error :name="$name" />
    @endif
</div>
