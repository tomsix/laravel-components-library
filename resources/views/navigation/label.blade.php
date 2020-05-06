<div>
    @isset($icon)
        <i class="{{ config('library.css.navigation.icon') }} {{ $icon }}"></i>
    @endisset
    @isset($text)
        <div>{{ $text }}</div>
    @endisset
</div>
