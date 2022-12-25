[08:45, 7/22/2022] Farah MI: @extends('dashboard.layouts.main')

@section('container')
    
    <div class="row justify-content-center mt-4">
        <div class="col-lg-8">
            <form action="/jurusandashboard" method="post">
                @csrf
                <div class="card">
                    <div class="card-header text-center">
                        Form Insert Data Dosen
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Jurusan</label>
                            <input type="text" name="nama" id="nama" placeholder="Nama Jurusan" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                      …
[08:46, 7/22/2022] Farah MI: @extends('dashboard.layouts.main')

@section('container')
    
    <div class="row justify-content-center mt-4">
        <div class="col-lg-8">
            <form action="/jurusandashboard/{{ $jurusans->id }}" method="post">
                @method('PUT')
                @csrf
                <div class="card">
                    <div class="card-header text-center">
                        Form Edit Data Jurusan
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Jurusan</label>
                            <input type="text" name="nama" id="nama" placeholder="Nama Jurusan" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama',$jurusans->nama) }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" name="submit" type="submit">Create Jurusan</button>
                            </div>
                        </div>
                    </div>
                </div>