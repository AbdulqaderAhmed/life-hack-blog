<header>
<nav class="transparent text-black">
   <div class="nav-wrapper">
      <a href="{{route('index')}}" class="brand-logo left">LifeHacks</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger right hide-on-med-and-up">
      <i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-small-and-down customNav">
         <li><a href="{{route('index')}}">Home</a></li>
         <li><a href="{{route('post.about')}}">About us</a></li>
         <li><a href="{{route('post.contact')}}">Contact us</a></li>
      </ul>
   </div>
</nav>

	<ul class="sidenav" id="mobile-demo">
	    <li>
	    <img src="{{asset('/images/city.jpg')}}"
	     width="300px" height="200px">
	    </li>
    	<li><a href="{{route('index')}}">Home</a></li>
    	<li><a href="{{route('post.about')}}">About us</a></li>
    	<li><a href="{{route('post.contact')}}">Contact us</a></li>
	</ul>
	
	<div class="container">
		<h1 class="font-effect-shadow-multiple customHeader">Geeks Life Hacks!</h1>
		<div class="container customIcon">
		   <form action="{{route('post.search')}}" method="get">
			  <div class="input-field">
				  <input id="search" type="search" name="query" required>
				  <label class="label-icon" for="search">
				        <i class="material-icons">search</i>
				  </label>
				  <button type="submit" 
				     class="waves-effect waves-light blue lighten-2">
				      Search <i class="material-icons prefix">search</i>
				  </button>
			  </div>
		   </form>
		</div>
	</div>
</header>