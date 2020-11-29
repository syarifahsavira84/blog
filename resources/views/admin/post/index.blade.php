@extends('template_backend.home')
@section('sub-judul', 'Post')
@section('content')


	<a href="{{route('post.create')}}" class="btn btn-dark btn-sm">Tambah Post</a>
	<br><br>
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Post</th>
				<th>Kategori</th>
				<th>Daftar Tags</th>
				<th>Creator</th>
				<th>Thumbnail</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($post as $result => $hasil)
			<tr>
				<td>{{ $result + $post->firstitem()}}</td>
				<td>{{$hasil->judul}}</td>
				<td>{{$hasil->category->name}}</td>
				<td>
					@foreach($hasil->tags as $tag)
					<ul>
						<h6><span class="badge badge-info">{{$tag->name}}</span></h6>
					</ul>
					@endforeach
				</td>
				<td>{{$hasil->user->nama}}</td>
				<td><img src="{{asset($hasil->gambar)}}" class="img-fluid" style="width: 50px"></td>
				<td width="20px"><a href="{{route('post.edit', $hasil->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a></td>

				<td width="20px">@include('template_backend.utils.delete',['url'=>url('post', $hasil->id)])</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{$post->links()}}

	
@endsection