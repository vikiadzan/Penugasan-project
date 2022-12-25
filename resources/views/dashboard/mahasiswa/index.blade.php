@extends('dashboard.layouts.main')
@section('container')
@section('title','Data Mahasiswa')

@if(session()->has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">

        {{session('pesan')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-5 text-center">Data Mhasiswa</h1>
<a href="/mahasiswadashboard/create" class="btn btn-primary my-4">Tambah data</a>

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
        <td>
             <a href ="/mahasiswadashboard/{{$mahasiswa->id}}/edit" class="btn btn-warning" >Edit </a>
             <form action="/mahasiswadashboard/{{$mahasiswa->id}}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit"  class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapusnya ?')">DELETE</button>
            </form>

        </td>
    </tr>
    @endforeach
</table>
{{ $mahasiswas->links('pagination::bootstrap-5')}}

@endsection
