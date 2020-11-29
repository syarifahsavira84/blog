@extends('template_backend.home')
@section('sub-judul', 'Tambah Kategori')
@section('content')

@if(count($errors)>0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger btn-sm" role="alert">
			{{$error}}
		</div>
	@endforeach
@endif

	<form action="{{route('category.store')}}" method="POST">
		@csrf
		<div class="form-group">
	        <label>Kategori</label>
	        <input type="text" class="form-control" name="name">
	    </div>
	    <div class="form-group">
	        <button class="btn btn-dark float-right">Simpan Kategori</button>
	    </div>
    </form>
@endsection