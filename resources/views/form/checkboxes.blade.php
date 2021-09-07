<div class="{{ config('library.css.form.group') }}">

    {!! $before ?? null !!}

    @foreach($options as $i => $option)

        @php
            $key = $optionsAreAssoc ? $i : $loop->iteration
        @endphp

        <x-form::checkbox :id="$attributes->get('id', $name) . '-' . $key"
                          value="{{ $key }}"
                          :name="$name"
                          :label="$option"
                          :inline="$inline"
                          :type="$type"
                          :show-errors="false"
        />
    @endforeach

    {{ $slot }}

    @if($showErrors && $hasError($name))
        <x-form::error :name="$name" class="d-block"/>
    @endif

    {!! $after ?? null !!}
</div>
