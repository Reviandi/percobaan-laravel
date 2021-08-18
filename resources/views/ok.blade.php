
@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $okee->tittle }}</h1>
        <p>By. TX23 & A3N in <a href=" /categories/{{ $okee->category->slug }}" style="text-decoration: none">{{        $okee->category->name }}</a></p>
        {!!  $okee->body !!}
    </article>

    <a href="/oke" style="text-decoration: none;">Kembali</a>
@endsection