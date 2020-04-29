@props(['prepend', 'append'])

<div class="input-group">

    @isset($prepend)
        <div class="input-group-prepend">
            <div class="input-group-text">{{ $prepend }}</div>
        </div>
    @endisset

    {{ $slot }}

    @isset($append)
        <div class="input-group-append">
            <div class="input-group-text">{{ $append }}</div>
        </div>
    @endisset

</div>
