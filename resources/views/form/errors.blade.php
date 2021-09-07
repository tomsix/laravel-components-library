@if ($errors->any())
    @dump($errors)

    <div class="{{ config('library.css.error.component.group') }} {{ config('library.css.error.component.group') . '-' . $color }}">
        @isset($title)
            <h4 class="{{ config('library.css.error.component.header') }}">{{ $title }}</h4>
        @endisset
        <ul class="{{ config('library.css.error.component.ul') }}">
            @foreach ($errors->all() as $error)
                <li class="{{ config('library.css.error.component.li') }}">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
