@extends('layouts.main')
@section('container')
@section('title','Data Siswa')

@if(session()->has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">

        {{session('pesan')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-5 text-center">Data Siswa</h1>

<table class="table table-bordered bg-light">
    <tr class="table-dark">
        <td>No</td>
        <td>NISN</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Kelas</td>
        <td>Alamat</td>
        <td>Nilai UAS</td>
     

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
        
    </tr>
    @endforeach
</table>
{{ $siswas->links('pagination::bootstrap-5')}}

@endsection
