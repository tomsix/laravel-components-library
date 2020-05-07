<li {{ $attributes->merge(['class' => $class]) }}>
    <a href="{{ $href }}" class="{{ config('library.css.navigation.link') }}">
        {{ $slot }}
    </a>
</li>
