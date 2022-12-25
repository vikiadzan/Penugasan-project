@extends('dashboard.layouts.main')
@section('container')
@section('title','Data Siswa')

@if(session()->has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">

        {{session('pesan')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-5 text-center">Data Siswa</h1>
<a href="/siswadashboard/create" class="btn btn-primary my-4">Tambah data</a>

<table class="table table-bordered bg-light">
    <tr class="table-dark">
        <td>No</td>
        <td>NISN</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Kelas</td>
        <td>Alamat</td>
        <td>Nilai UAS</td>
        @if(auth()->user()->role == 'admin' || auth()->user()->role == 'guru')
        <td>Aksi</td>
        @endif

    </tr>

    @foreach ($siswas as $siswa)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$siswa->nisn}}</td>
        <td>{{$siswa->nama}}</td>
        <td>{{$siswa->jenis_kelamin}}</td>
        <td>{{$siswa->kelas}}</td>
        <td>{{$siswa->alamat}}</td>
        <td>{{$siswa->nilai_uas}}</td>
        <td>
        @if(auth()->user()->role == 'admin' || auth()->user()->role == 'guru')
             <a href ="/siswadashboard/{{$siswa->id}}/edit" class="btn btn-warning" >Edit </a>
             <form action="/siswadashboard/{{$siswa->id}}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                @endif
                @if(auth()->user()->role == 'admin')
                <button type="submit"  class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapusnya ?')">DELETE</button>
            </form>
            @endif

        </td>
    </tr>
    @endforeach
</table>
{{ $siswas->links('pagination::bootstrap-5')}}

@endsection
