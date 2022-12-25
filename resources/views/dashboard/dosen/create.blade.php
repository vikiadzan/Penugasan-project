@extends('layouts.main')
@section('container')
@section('title','Form Dosen')

<div class="row justify-content-center">
    <div class="col-lg-6>"

    <h3 class="text-center"> Entri Data Dosen</h3>
    <form action= "/dosendashboard" method="POST">
        <div class="mb-3">
            @csrf
            <label  for ="nim" class="form-label">nip</label>
            <input type="text" class="form-control @error('nip') is-invalid @enderror" value="{{old('nip')}}
            "id="nip" name="nip">
            @error('nip')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control  @error('nama') is-invalid @enderror" value="{{old('nama')}}" 
            id="nama"  name="nama" >
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
       
		</div>
        <div class="mb-3">
            <label  class="form-label">Jurusan</label>
            <select class="form-select" name="jurusan_id" aria-label="Default select example">
            
                @foreach($jurusans as $jurusan)
                    @if(old('jurusan_id')==$jurusan->id)
                        <option value="{{$jurusan->id}}" selected>{{$jurusan->nama}}</option> 
                    @else
                        <option value="{{$jurusan->id}}">{{$jurusan->nama}}</option> 
                    @endif


                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control  @error('email') is-invalid @enderror" value="{{old('email')}}" 
            id="email"  name="email" >
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
		</div>

        <div class="mb-3">
            <label for="tlp" class="form-label">Telepon</label>
            <input type="text" class="form-control  @error('tlp') is-invalid @enderror" value="{{old('tlp')}}" 
            id="tlp"  name="tlp" >
            @error('tlp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
		</div>



        <div class="mb-2">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control  @error('alamat') is-invalid @enderror" value="{{old('alamat')}}" name="alamat" rows="3">
            {{old('alamat')}}</textarea>
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror

        </div>

        <div class="container">
            <div class="row">
        
            <button type="submit" name="submit" class="btn btn-primary col-md-2">Submit</button>
            <a href="../dosendashboard" class="btn btn-danger col-md-2 offset-md-8">Kembali</a>
        </div>
   
</form>

</div>
</div>

@endsection