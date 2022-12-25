@extends('layouts.main')
@section('container')
@section('title','Berita')

<div class="row">
  @if ($beritas->count()>0)
  <div class="card mb-3 text-center">
  <img src="https://source.unsplash.com/800x200?web,networking" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$beritas[0]->title}}</h5>
    <p class="card-text">{{ $beritas[0]->excerpt }}</p>
    <a href="/berita/{{$beritas[0]->id}}" class="btn btn-primary">Readmore</a>
    <p class="card-text"><small class="text-muted">{{ $beritas[0]->created_at->diffForHumans()}}</small></p>
  </div>
</div>
@endif
</div>






<div class="row mb-2">
@foreach($beritas->skip(1) as $berita)

<div class="col-lg-4">

  <div class="card" style="width: 18rem;">
    <img src="https://source.unsplash.com/800x200?web,networking" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$berita->title}}</h5>
      <p class="card-text"> {{ $berita->excerpt }}</p>
      <a href="/berita/{{$berita->id}}" class="btn btn-primary">Readmore</a>
      
    </div>
  </div>
</div>
@endforeach
</div>
@endsection