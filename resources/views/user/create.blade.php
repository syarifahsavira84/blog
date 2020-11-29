@extends('template_backend.home')
@section('sub-judul', 'Tambah User')
@section('content')

@if(count($errors)>0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger btn-sm" role="alert">
			{{$error}}
		</div>
	@endforeach
@endif

	<form action="{{url('user')}}" method="POST">
		@csrf
		<div class="form-group">
	        <label>Nama</label>
	        <input type="text" class="form-control" name="nama">
	    </div>
	    <div class="form-group">
	        <label>Username</label>
	        <input type="text" class="form-control" name="username">
	    </div>
	    <div class="form-group">
	        <label>Email</label>
	        <input type="email" class="form-control" name="email">
	    </div>
	    <div class="form-group">
	        <label>Tipe User</label>
	        <select class="form-control" name="tipe">
	        	<option value="" holder>Pilih Tipe User</option>
	        	<option value="1" holder>Administrator</option>
	        	<option value="0" holder>Penulis</option>
	        </select>
	    </div>
	    <div class="form-group">
	        <label>Password</label>
	        <input type="password" class="form-control" name="password">
	    </div>
	    <div class="form-group">
	        <button class="btn btn-dark float-right">Simpan User</button>
	    </div>
    </form>
@endsection