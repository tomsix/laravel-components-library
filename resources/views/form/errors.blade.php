@if ($errors->any())
    <div class="alert alert-{{ $color }}">
        @isset($title)
            <h4 class="alert-heading">{{ $title }}</h4>
        @endisset
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
