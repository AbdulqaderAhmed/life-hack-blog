@extends("layouts.app")

@section("content")
    <div class="container">
       <div class="row z-depth-5">
           <form class="col s12" 
              action="{{route('post.store')}}" 
              method="post" enctype="multipart/form-data">
             @csrf
              <h4 class="center"> Create Post</h4>
              <input type="hidden" name="user_id" value="{{$user}}">
               <div class="row">
               	  <div class="input-field col s12">
               	      <i class="material-icons prefix">title</i>
               	      <input type="text" name="title" id="title">
               	      <label for="title">Title</label>
               	  </div>
               	  
               	  <div class="input-field col s12">
               	  	  <i class="material-icons prefix">description</i>
               	  	  <textarea class="materialize-textarea"
               	  	   name="body" id="description"></textarea>
               	  	  <label for="description">Descriptions</label>
               	  </div>
               	  
               	  <div class="input-field col s12">
               	      <div class="file-field input-field">
               	      	<div class="btn">
               	      		<span>Image</span>
               	      		<input type="file" name="image">
               	      	</div>
               	      	<div class="file-path-wrapper">
               	      		<input class="file-path validate" type="text"
               	          		placeholder="Upload image....">
               	      </div>
               	      </div>
               	  </div>
               	  
               	  <div class="col s12 center">
               	      <button type="submit" class="btn waves-effect waves-light"
               	          type="submit" name="action">Submit
               	      		<i class="material-icons right">send</i>
               	      </button>
               	      
               	      <button type="reset" 
               	           class="btn waves-effect waves-light red darken-2"
               	      		type="reset" name="action">Reset
               	      		<i class="material-icons right">restart_alt</i>
               	      </button>
               	  </div>
               	  
               </div>
           </form>
       </div>
    </div>
@endsection