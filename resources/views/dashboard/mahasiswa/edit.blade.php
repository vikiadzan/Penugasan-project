@extends('dashboard.layouts.main')
@section('container')
@section('title','Form Mahasiswa')

<div class="row justify-content-center">
    <div class="col-lg-6>"

    <h3 class="text-center"> Edit Data Mahasiswa</h3>
    <form action= "/mahasiswadashboard/{{$mahasiswas->id}}" method="POST">
        @method('PUT')
        <div class="mb-3">
            @csrf
            <label  for ="nim" class="form-label">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" value="{{old('nim',$mahasiswas->nim)}}
            "id="nim" name="nim" readonly>
            @error('nim')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control  @error('nama') is-invalid @enderror" value="{{old('nama',$mahasiswas->nama)}}" 
            id="nama"  name="nama" >
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>

        <div class="mb-3">
		  	<label class="form-label">Jenis Kelamin</label>
		  	<div class="d-flex">
		  		<div class="form-check form-check-inline">
			  		<input class="form-check-input" type="radio" name="jenis_kelamin" value="L" checked=" {{old('jenis_kelamin',$mahasiswas->jenis_kelamin)=='L'?'checked' : ''}}checked">Laki-laki
				</div>
				<div class="form-check form-check-inline">
				  	<input class="form-check-input" type="radio" name="jenis_kelamin" value="P" @checked(old('jenis_kelamin',$mahasiswas->jenis_kelamin)=='P')>Perempuan
				</div>
			</div>
			@error('jenis_kelamin')
		  		<div class="invalid-feedback">
		  			{{$message}}
		  		</div>
		  	@enderror
		</div>
        <div class="mb-3">
            <label  class="form-label">Jurusan</label>
            <select class="form-select" name="jurusan_id" aria-label="Default select example">
            
                @foreach($jurusans as $jurusan)
                    @if(old('jurusan_id',$mahasiswas->jurusan_id)==$jurusan->id)
                        <option value="{{$jurusan->id}}" selected>{{$jurusan->nama}}</option> 
                    @else
                        <option value="{{$jurusan->id}}">{{$jurusan->nama}}</option> 
                    @endif


                @endforeach
            </select>
        </div>


        <div class="mb-2">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control  @error('alamat') is-invalid @enderror"  name="alamat" rows="3">
            {{old('alamat',$mahasiswas->alamat)}}</textarea>
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror

        </div>

        <div class="container">
            <div class="row">
        
            <button type="submit" name="submit" class="btn btn-primary col-md-2">Submit</button>
            <a href="../mahasiswadashboard" class="btn btn-danger col-md-2 offset-md-8">Kembali</a>
        </div>
   
</form>

</div>
</div>

@endsection