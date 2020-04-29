@if(config('library.inline_errors'))
    @error($name)
        <div class="{{ config('library.css.error.inline.div') }}">
            {{ $message }}
        </div>
    @enderror
@endif
