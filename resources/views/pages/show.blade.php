@extends("layouts.app")

@section("content")
   <div class="container">
       <div class="row">
          <div class="col s12">
              <div class="card-panel gray">
                 <a href="{{route('index')}}" class="btn waves-effect waves-light">
                   <i class="material-icons prefix">arrow_back</i>
                   back
                 </a>
                  <p>
                       {{$post->body}}
                  </p>
              </div>
          </div>
       </div>
   </div>
@endsection