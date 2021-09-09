<div class="{{ config('library.css.form.group') }}">

    {!! $before ?? null !!}

    @foreach($options as $key => $option)

        <x-form::checkbox :id="$attributes->get('id', $name) . '-' . $key"
                          value="{{ $key }}"
                          :name="$name"
                          :label="$option"
                          :inline="$inline"
                          :type="$type"
                          :show-errors="false"
                          :checked="$isChecked($key)"
        />
    @endforeach

    {{ $slot }}

    @if($showErrors && $hasError($name))
        <x-form::error :name="$name" class="d-block"/>
    @endif

    {!! $after ?? null !!}
</div>
