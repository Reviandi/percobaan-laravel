 @extends('layouts.main')

 @section('container')
    <h1 class="mb-5">Halaman B L O G</h1>
     @foreach ($oke as $ok ) 
        <article class="mb-4">
        <h2><a href="/oke/{{ $ok->slug }}" style="text-decoration: none;">{{ $ok->tittle }}</a></h2>
        <p>{{ $ok->excerpt }}</p>
        </article> 
     @endforeach   
   

 @endsection

