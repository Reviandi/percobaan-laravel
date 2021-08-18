@extends('layouts.main')
@section('container')
    <h2>{{ $name }}</h2>
    <h3>{{ $email }}</h3>
    <img src="img/{{ $image }}" alt="{{ $name }}" style="width: 300px;height: 300px;" class="img-thumbnail rounded-circle">
@endsection