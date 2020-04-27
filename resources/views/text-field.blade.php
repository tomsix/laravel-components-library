@extends('library::form-group')

@section('input')
    <input
        autocomplete="off"
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        class="form-control @error($name) is-invalid @enderror"
        placeholder="{{ $placeholder }}"
        value="{{ old($name, $value) }}"
        {{ $required }} {{ $disabled }} {{ $readonly }}
    />
@endsection()
