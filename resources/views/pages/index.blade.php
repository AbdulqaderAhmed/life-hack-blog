@extends("layouts.app")

@section("content")
	<div class="container customPost">
	  <div class="row">
	    
	      @foreach($post as $items)
	       <div class="col l2 m3 s6">
			<div class="card small">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" 
					  src="{{asset('/images/'.$items->image_path)}}"
					    height="200px">
					<span class="card-title">{{$items->title}}</span>
				</div>
				<div class="card-content">
					<p>click here if u are interested by the article
	           <a href="{{route('post.show', $items->id)}}">Read page....</a>
					</p>
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