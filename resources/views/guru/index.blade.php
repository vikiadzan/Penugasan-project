@extends('.layouts.main')
@section('container')
@section('title','Data guru')

@if(session()->has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">

        {{session('pesan')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-5 text-center">Data Guru</h1>

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
      
    </tr>
    @endforeach
</table>
{{ $gurus->links('pagination::bootstrap-5')}}


@endsection
