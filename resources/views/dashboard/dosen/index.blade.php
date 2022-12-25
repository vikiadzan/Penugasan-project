@extends('dashboard.layouts.main')
@section('container')
@section('title','Data Dosen')

@if(session()->has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">

        {{session('pesan')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-5 text-center">Data Dosen</h1>
<a href="/dosendashboard/create" class="btn btn-primary my-4">Tambah data</a>

<table class="table table-bordered bg-light">
    <tr class="table-dark">
        <td>No</td>
        <td>NIP</td>
        <td>Nama</td>
        <td>Jurusan</td>
        <td>Email</td>
        <td>Telepon</td>
        <td>alamat</td>
        <td>aksi</td>
    </tr>

    @foreach ($dosens as $dosen)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$dosen->nip}}</td>
        <td>{{$dosen->nama}}</td>
        
        <td>{{$dosen->jurusan_id}}</td>
        <td>{{$dosen->email}}</td>
        <td>{{$dosen->tlp}}</td>
        <td>{{$dosen->alamat}}</td>
        <td>
        <a href ="/dosendashboard/{{$dosen->id}}/edit" class="btn btn-warning" >Edit </a>
             <form action="/dosendashboard/{{$dosen->id}}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit"  class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapusnya ?')">DELETE</button>


        </td>
    </tr>
    @endforeach
</table>
{{ $dosens->links('pagination::bootstrap-5')}}


@endsection
