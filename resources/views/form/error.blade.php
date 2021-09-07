@error($name.'*', $bag)
    <div {{ $attributes->class(config('library.css.error.inline.div')) }}>
        {{ $message }}
    </div>
@enderror
