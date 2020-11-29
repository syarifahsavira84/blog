@extends('template_backend.home')
@section('sub-judul', 'Tag')
@section('content')


	<a href="{{route('tag.create')}}" class="btn btn-dark btn-sm">Tambah Tag</a>
	<br><br>
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Tag</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tag as $result => $hasil)
			<tr>
				<td>{{ $result + $tag->firstitem()}}</td>
				<td>{{$hasil->name}}</td>
				<td width="20px"><a href="{{route('tag.edit', $hasil->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a></td>

				<td width="20px">@include('template_backend.utils.delete',['url'=>url('tag', $hasil->id)])</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{$tag->links()}}

	
@endsection