@extends('template_backend.home')
@section('sub-judul', 'Detail Data User')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mmt-5">
			<div class="card">
				<hr>
				<div class="card-body">
					<h3>{{$user->nama}}</h3>
					<hr>
					<p>
						{{"@".$user->username}} |
						Email : {{$user->email}}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection