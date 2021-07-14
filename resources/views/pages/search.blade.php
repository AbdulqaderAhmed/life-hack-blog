@extends("layouts.app")

@section("content")
	<div class="container">
	  <div class="row">
	    <h5>Search result:</h5>
	      @foreach($post as $items)
	      <div class="col s12 m4">
			<div class="card small">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="{{asset('/images/'.$items->image_path)}}">
					<span class="card-title">{{$items->title}}</span>
				</div>
				<div class="card-content">
					<p><a href="{{route('post.show', $items->id)}}">Read page....</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">
						{{$items->title}}
						<i class="material-icons right">close</i>
					</span>
					<p>{{$items->body}}</p>
				</div>
			</div>
		   </div>
		  @endforeach
	   </div>
	</div>
@endsection