@extends("layouts.app")

@section("content")

  <div class="section white">
  	  <div class="row container center">
  	    <p class="red-text" id="upward">got a question?</p>
  		<h2 class="header">Contact LifeHacks</h2>
 		<h4 class="grey-text text-darken-3 lighten-3 center">
  			We let you know us
  		</h4>
  		<p>
  			We are here to help you and answer any question you might have.
  			We look forward to hearing you.
  		</p>
  	  </div>
  </div>
  <div class="parallax-container">
  	  <div class="parallax">
  	     <img src="{{asset('/images/city1.jpg')}}">
  	  </div>
  </div>
  <div class="section white">
  	  <div class="row container center">
  	      <form action="#" class="col s12 ">
  	      	<div class="row">
  	      		<div class="input-field col s12 ">
  	      			<i class="material-icons prefix">email</i>
  	      			<input type="email" class="validate" 
  	      				id="email" name="email">
  	      			<label for="email">E-mail</label>
  	      		</div>
  	      
  	      		<div class="input-field col s12">
  	      			<i class="material-icons prefix">description</i>
  	      			<textarea class="materialize-textarea"
  	      				name="body" id="description"></textarea>
  	      			<label for="description">Descriptions</label>
  	      		</div>
  	      
  	      
  	      		<div class="col s12 center">
  	      			<button class="btn waves-effect waves-light">
  	      				Send message
  	      				<i class="material-icons right">send</i>
  	      			</button>
  	      		</div>
  	        </div>
  	      </form>
  	  </div>
  </div>
  <div class="parallax-container">
  	  <div class="parallax">
  		<img src="{{asset('/images/city2.jpg')}}">
 	  </div>
  </div>
  <div class="section white">
  	<div class="row container center">
  		<h2 class="header center">Get in touch.</h2>
  		 <p>
  		<i class="material-icons">phone</i>
  		Phone: +251944444444
  		</p>
  		
  		<p>
  		<i class="material-icons">email</i>
  		Email: lifehack@hotmail.com
  		</p>
  		
  		<p><i class="material-icons">place</i>
  		   Address: Addis Ababa, Ethiopia
  		</p>
  		
    </div>
  </div>
  
  

@endsection