@extends('layouts.main')
@section('container')
@section('title','Show')
<div class="row mt-3">

<div class="col-lg-8">

  <div class="card" style="width: 18rem;">
    <img src="https://source.unsplash.com/800x200?web,networking" class="card-img-top" alt="..."
    class="card-img-top">
      <h5 class="card-title">{{$berita->title}}</h5>
      <p class="card-text"> {{ $berita->body }}</p>
      <a href="/berita" class="btn btn-primary">Back</a>
      
    
  </div>
</div>
@endsection