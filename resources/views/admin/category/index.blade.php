@extends('template_backend.home')
@section('sub-judul', 'Kategori')
@section('content')


	<a href="{{route('category.create')}}" class="btn btn-dark btn-sm">Tambah Kategori</a>
	<br><br>
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Kategori</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($category as $result => $hasil)
			<tr>
				<td>{{ $result + $category->firstitem()}}</td>
				<td>{{$hasil->name}}</td>
				<td width="20px"><a href="{{route('category.edit', $hasil->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a></td>

				<td width="20px">@include('template_backend.utils.delete',['url'=>url('category', $hasil->id)])</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{$category->links()}}

	
@endsection