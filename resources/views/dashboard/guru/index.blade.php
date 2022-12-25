@extends('dashboard.layouts.main')
@section('container')
@section('title','Data guru')

@if(session()->has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">

        {{session('pesan')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-5 text-center">Data Guru</h1>
<a href="/gurudashboard/create" class="btn btn-primary my-4">Tambah data</a>

<table class="table table-bordered bg-light">
    <tr class="table-dark">
        <td>No</td>
        <td>NIP</td>
        <td>Nama</td>
        <td>Telepon</td>
        <td>alamat</td>
        <td>aksi</td>
    </tr>

    @foreach ($gurus as $guru)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$guru->nip}}</td>
        <td>{{$guru->nama_guru}}</td>
        <td>{{$guru->no_tlp}}</td>
        <td>{{$guru->alamat}}</td>
        <td>
        <a href ="/gurudashboard/{{$guru->id}}/edit" class="btn btn-warning" >Edit </a>
             <form action="/gurudashboard/{{$guru->id}}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                @if(auth()->user()->role =='admin')
                <button type="submit"  class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapusnya ?')">DELETE</button>
                @endif


        </td>
    </tr>
    @endforeach
</table>
{{ $gurus->links('pagination::bootstrap-5')}}


@endsection
