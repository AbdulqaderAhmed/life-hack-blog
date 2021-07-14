@extends('layouts.app')

@section('content')

    <div class="container">
    	<div class="card z-depth-5 customLogin">
    	   <div class="card-content black-text">
    	       <span class="card-title center">Register</span>
    	       <div class="row">
    	       	   <form action="{{route('user.register')}}" 
    	       	        method="post" class="col s12 ">
    	       	        @csrf
    	       	       <div class="row">
    	       	           <div class="input-field col s12 ">
    	       	           	   <i class="material-icons prefix">account_box</i>
    	       	               <input type="text" id="username" name="name">
    	       	               <label for="username">Username</label>
    	       	           </div>
    	       	           
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
    	       	           
    	       	           <div class="col s12 center">
    	       	               <button type="submit" class="btn waves-effect waves-light">
    	       	                   Register
    	       	               </button>
    	       	               <button type="Reset" 
    	       	                  class="btn waves-effect waves-light red lighten-1">
    	       	                   Reset
    	       	               </button>
    	       	           </div>
    	       	           
    	       	           <div class="col s12 center">
    	       	             <a href="{{route('login')}}" 
    	       	                class="waves-effect waves-dark">
    	       	                already have accout?
    	       	             </a>
    	       	           </div>
    	       	       </div>
    	       	   </form>
    	       </div>
    	   </div>
    	</div>
    </div>

@endsection