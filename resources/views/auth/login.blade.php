@extends('layouts.app')

@section('content')

    <div class="container">
    	<div class="card z-depth-5 customLogin">
    	   <div class="card-content black-text">
    	       <span class="card-title center">Login</span>
    	       <div class="row">
    	       	   <form action="{{route('user.login')}}" 
    	       	        method="post" class="col s12 ">
    	       	        @csrf
    	       	       <div class="row">
    	       	           <div class="input-field col s12 ">
    	       	               <i class="material-icons prefix">email</i>
    	       	               <input type="email" class="validate" 
    	       	                   id="email" name="email">
    	       	               <label for="email">E-mail</label>
    	       	           </div>
    	       	           
    	       	           <div class="input-field col s12 ">
    	       	               <i class="material-icons prefix">lock</i>
    	       	               <input type="password" class="validate" 
    	       	                   id="password" name="password">
    	       	               <label for="password">Password</label>
    	       	           </div>
    	       	           
    	       	           <div class="input-field col s12 ">
    	       	               <p>
    	       	                  <label>
    	       	                     <input type="checkbox">
    	       	                     <span>Remember me</span>
    	       	                  </label>
    	       	               </p>
    	       	           </div>
    	       	           
    	       	           <div class="col s12 center">
    	       	               <button class="btn waves-effect waves-light">
    	       	                   Login
    	       	                   <i class="material-icons right">login</i>
    	       	               </button>
    	       	               <a href="{{route('register')}}" class="waves-effect waves-light">
    	       	                  don't have account register!
    	       	               </a>
    	       	           </div>
    	       	       </div>
    	       	   </form>
    	       </div>
    	   </div>
    	</div>
    </div>

@endsection