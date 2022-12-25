@extends('dashboard.layouts.main')
@section('container')
@section('title','Form Siswa')

<div class="row justify-content-center">
    <div class="col-lg-6>"

    <h3 class="text-center"> Edit Data Siswa</h3>
    <form action= "/siswadashboard/{{$siswas->id}}" method="POST">
        @method('PUT')
        <div class="mb-3">
            @csrf
            <label  for ="nisn" class="form-label">NISN</label>
            <input type="text" class="form-control @error('nisn') is-invalid @enderror" value="{{old('nisn',$siswas->nisn)}}
            "id="nisn" name="nisn" >
            @error('nisn')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control  @error('nama') is-invalid @enderror" value="{{old('nama',$siswas->nama)}}" 
            id="nama"  name="nama" >
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>

      
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control  @error('jenis_kelamin') is-invalid @enderror" value="{{old('jenis_kelamin',$siswas->jenis_kelamin)}}" 
            id="jenis_kelamin"  name="jenis_kelamin" >
            @error('jenis_kelamin')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control  @error('tanggal_lahir') is-invalid @enderror" value="{{old('tanggal_lahir',$siswas->tanggal_lahir)}}" 
            id="tanggal_lahir"  name="tanggal_lahir" >
            @error('tanggal_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control  @error('kelas') is-invalid @enderror" value="{{old('kelas',$siswas->kelas)}}" 
            id="kelas"  name="kelas" >
            @error('kelas')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>

        
        <div class="mb-2">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control  @error('alamat') is-invalid @enderror"  name="alamat" rows="3">
            {{old('alamat',$siswas->alamat)}}</textarea>
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror

        </div>
        <div class="mb-3">
            <label for="nilai_uas" class="form-label">Nilai UAS</label>
            <input type="text" class="form-control  @error('nilai_uas') is-invalid @enderror" value="{{old('nilai_uas',$siswas->nilai_uas)}}" 
            id="nilai_uas"  name="nilai_uas" >
            @error('nilai_uas')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>

        <div class="container">
            <div class="row">
        
            <button type="submit" name="submit" class="btn btn-primary col-md-2">Submit</button>
            <a href="/siswadashboard" class="btn btn-danger col-md-2 offset-md-8">Kembali</a>
        </div>
   
</form>

</div>
</div>

@endsection