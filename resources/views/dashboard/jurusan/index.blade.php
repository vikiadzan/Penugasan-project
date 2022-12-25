@extends('dashboard.layouts.main')

@section('container')

@if (session()->has('pesan_tambah'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert"">
            Data Berhasil di Tambah
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(session()->has('pesan_edit'))
        <div class="alert alert-primary alert-dismissible fade show mt-2" role="alert"">
            Data Berhasil di Edit
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(session()->has('pesan_hapus'))
        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert"">
            Data Berhasil di Hapus
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <h1 class="text-center">Data Jurusan</h1>
    <a href="/jurusandashboard/create" class="btn btn-primary">Insert Data Jurusan</a>

    @endif

    <table class="table table-bordered mt-4">
        <tr>
            <th>No</th>
            <th>Nama Jurusan</th>
            <th>Options</th>
        </tr>

            @foreach ($jurusans as $jrs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jrs->nama }}</td>
                    <td>
                        <a href="/jurusandashboard/{{ $jrs->id }}/edit" class="btn btn-warning">Edit</a>

                        <form action="/jurusandashboard/{{ $jrs->id }}" method="post" class="d-inline">
                            @method('DELETE')
                        @csrf
                            <button class="btn btn-danger" onclick="return confirm('Yakin Akan Menghapus Data..?')" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
    {{ $jurusans->links('pagination::bootstrap-5') }}

@endsection