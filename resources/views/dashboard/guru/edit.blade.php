@extends('layouts.main')
@section('container')
@section('title','Form guru')

<div class="row justify-content-center">
    <div class="col-lg-6>"

    <h3 class="text-center"> Entri Data Guru</h3>
    <form action= "/gurudashboard/{{$gurus->id}}" method="post">

        @method('PUT')
        @csrf
        <div class="mb-3">
            
            <label  for ="nim" class="form-label">nip</label>
            <input type="text" class="form-control @error('nip') is-invalid @enderror" value="{{old('nip',$gurus->nip)}}
            "id="nip" name="nip">
            @error('nip')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>
        
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control  @error('nama_guru') is-invalid @enderror" value="{{old('nama_guru',$gurus->nama_guru)}}" 
            id="nama_guru"  name="nama_guru" >
            @error('nama_guru')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
       

        <div class="mb-3">
            <label for="tlp" class="form-label">Telepon</label>
            <input type="text" class="form-control  @error('no_tlp') is-invalid @enderror" value="{{old('no_tlp',$gurus->no_tlp)}}" 
            id="no_tlp"  name="no_tlp" >
            @error('no_tlp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
		</div>



        <div class="mb-2">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control  @error('alamat') is-invalid @enderror" value="{{old('alamat')}}" name="alamat" rows="3">
            {{old('alamat',$gurus->alamat)}}</textarea>
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror

        </div>

        <div class="container">
            <div class="row">
        
            <button type="submit" name="submit" class="btn btn-primary col-md-2">Submit</button>
            <a href="/gurudashboard" class="btn btn-danger col-md-2 offset-md-8">Kembali</a>
        </div>
   
</form>

</div>
</div>

@endsection