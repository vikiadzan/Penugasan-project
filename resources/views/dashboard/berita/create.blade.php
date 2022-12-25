@extends('dashboard.layouts.main')


@section('container')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <h3>Entri data blog</h3>
    <form action="/beritadashboard" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
        @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      
      <div class="mb-3">
        <label class="form-label">kategori</label>
        <select class="form-select" name="kategori_id" aria-label="Default select example">
          @foreach ($kategoris as $kategori)
            @if (old('kategori_id')==$kategori->id)
            <option value="{{$kategori->id}}" selected>{{$kategori->nama}}</option>
            @else
            <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
            @endif
          @endforeach
        </select>
      </div>

      <div class="mb-2">
        <label for="file_upload" class="form-label">File Upload</label>
        <input type="file" class="form-control @error('file_upload') is-invalid @enderror" name="file_upload" value="{{ old('file_upload')}} ">
        @error('file_upload')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>

      <div class="mb-3">
        <label class="form-label">Body</label>
        <textarea class="form-control @error('body') is-invalid @enderror" name="body" rows="3">{{old('body')}}</textarea>
        @error('body')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label"></label>
        <button type="submit" name="submit" class="btn btn-primary float-end">Create Blog</button>
      </div>


    </form>

  </div>
</div>

@endsection