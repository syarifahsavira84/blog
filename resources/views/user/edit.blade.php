@extends('template_backend.home')
@section('sub-judul', 'Edit Kategori')
@section('content')

@if(count($errors)>0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger btn-sm" role="alert">
			{{$error}}
		</div>
	@endforeach
@endif

	<form action="{{url('user',$user->id)}}" method="POST">
		@csrf
		@method('put')
		<div class="form-group">
	        <label>Nama</label>
	        <input type="text" class="form-control" name="nama" value="{{$user->nama}}">
	    </div>
	    <div class="form-group">
	        <label>Username</label>
	        <input type="text" class="form-control" name="username" value="{{$user->username}}">
	    </div>
	    <div class="form-group">
	        <label>Email</label>
	        <input type="text" class="form-control" name="email" value="{{$user->email}}" readonly>
	    </div>
	    <div class="form-group">
	        <label>Tipe User</label>
	        <select class="form-control" name="tipe">
	        	<option value="" holder>Pilih Tipe User</option>
	        	<option value="1" holder 
	        	@if($user->tipe ==1)
	        	selected
	        	@endif
	        	>Administrator</option>
	        	<option value="0" holder 
	        	@if($user->tipe == 0)
	        	selected
	        	@endif
	        	>Penulis</option>
	        </select>
	    </div>
	    <div class="form-group">
	        <label>Password</label>
	        <input type="text" class="form-control" name="password">
	    </div>
	    <div class="form-group">
	        <button class="btn btn-dark float-right">Update User</button>
	    </div>
    </form>
@endsection
