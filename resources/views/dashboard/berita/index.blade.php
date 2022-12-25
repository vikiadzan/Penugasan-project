@extends('dashboard.layouts.main')
@section('container')
@if(session()->has('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<i class="fa fa-check"></i>  {{session('pesan')}}
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
</div>
@elseif(session()->has('update'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
	<i class="fa fa-check"></i>  {{session('update')}}
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
</div>
@elseif(session()->has('hapus'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<i class="fa fa-check"></i>  {{session('hapus')}}
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
</div>
@endif
<h4 class="text-center">DATA BERITA</h4>
<a href="beritadashboard/create" class="btn" style="background-color:	#4682B4;color: white;"><i class="fa fa-pencil-alt"></i>  Tambah Data</a>
<table class="table table-bordered my-4 text-center">
	<thead class="table-dark">
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Nama</th>
			<th>Kategori</th>
			<th>Exerpt</th>
			<th>Gambar</th>
			<th width="190px">Opsi</th>
		</tr>
	</thead>
	@foreach ($beritas as $berita)
	<tbody class="bg-light">
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$berita->title}}</td>
			<td>{{$berita->user->name}}</td>
			<td>{{$berita->kategori->nama}}</td>
			<td>{{$berita->excerpt}}</td>
			<td><img src="/img/{{$berita->file_upload}}"></td>
			<td>
				<a href="beritadashboard/{{$berita->id}}/edit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>  Edit</a>
				<form action="/beritadashboard/{{$berita->id}}" method="post" class="d-inline">
					@method('DELETE')
					@csrf
					<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data ?')"><i class="fa fa-trash"></i>  Hapus</button>
				</form>
			</td>
		</tr>
	</tbody>
	@endforeach
</table>
{{$beritas ->links('pagination::bootstrap-5')}}
@endsection