@extends('template_blog.content')

@section('isi')
<!-- post -->
<div class="col-md-8 hot-post-left">
<!-- post -->
				
				@foreach($data as $list_post)
					<div class="post post-row">
						<a class="post-img" href="{{route('blog.isi', $list_post->slug)}}"><img src="{{asset($list_post->gambar)}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$list_post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$list_post->judul}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$list_post->user->nama}}</a></li>
								<li>{{$list_post->created_at}}</li>
							</ul>
						</div>

					</div>
					@endforeach
				<center>{{$data->links()}}</center>
					<!-- /post -->
				</div>
@endsection