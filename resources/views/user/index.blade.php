@extends('template_backend.home')
@section('sub-judul', 'User')
@section('content')


	<a href="{{url('user/create')}}" class="btn btn-dark btn-sm">Tambah User</a>
	<br><br>
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Type</th>
				<th colspan="3">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($list_user as $user)
			<tr>
				<td>{{ $loop->iteration}}</td>
				<td>{{$user->username}}</td>
				<td>{{$user->nama}}</td>
				<td>{{$user->email}}</td>
				<td>
					@if($user->tipe)
					<span class="badge badge-info">Administrator</span>
					@else
					<span class="badge badge-warning">Penulis</span>
					@endif
				</td>
				<td width="20px">
					<a href="{{url('user', $user->id)}}" class="btn btn-sm btn-info"><i class="fa fa-info"></i></a>
				</td>
				<td width="20px">
					<a href="{{url('user', $user->id)}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
				</td>
				<td width="20px">@include('template_backend.utils.delete',['url'=>url('user', $user->id)])</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
@endsection