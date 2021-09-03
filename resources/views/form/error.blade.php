@if(config('library.inline_errors'))
    @error($name)
        <div {{ $attributes->class([config('library.css.error.inline.div')]) }}>{{ $message }}</div>
    @enderror
@endif
