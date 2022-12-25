@extends('layouts.main')
@section('container')
@section('title','Data Mahasiswa')

@if(session()->has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">

        {{session('pesan')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-5 text-center">Data Mhasiswa</h1>


<table class="table table-bordered bg-light">
    <tr class="table-dark">
        <td>No</td>
        <td>NIM</td>
        <td>Nama</td>
        <td>JK</td>
        <td>Jurusan</td>
        <td>Alamat</td>
        <td>Aksi</td>

    </tr>

    @foreach ($mahasiswas as $mahasiswa)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$mahasiswa->nim}}</td>
        <td>{{$mahasiswa->nama}}</td>
        <td>{{$mahasiswa->jenis_kelamin}}</td>
        <td>{{$mahasiswa->jurusan->nama}}</td>
        <td>{{$mahasiswa->alamat}}</td>
   
    </tr>
    @endforeach
</table>
{{ $mahasiswas->links('pagination::bootstrap-5')}}

@endsection
