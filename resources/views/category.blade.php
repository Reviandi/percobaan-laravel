 @extends('layouts.main')
 @section('container')
    <h1 class="mb-5">Blog Kategori : {{ $category }}</h1>
     @if(!$oke->isEmpty())
      <script>alert('Blog Ada');</script>
     @else
      <script>alert('Blog Tidak Ada');</script>
      <div class="alert alert-primary">Tidak Ada Blog</div>
     @endif
     @foreach ($oke as $ok ) 
        <article class="mb-4">
        <h2><a href="/oke/{{ $ok->slug }}" style="text-decoration: none;">{{ $ok->tittle }}</a></h2>
        <p>{{ $ok->excerpt }}</p>
        </article>
     @endforeach 
     
     <br><h6><a href="/categories" style="text-decoration: none">Kembali ke Categories</a></h6>
 @endsection

