@extends('layouts.app')

@section('headSection')
<link rel="stylesheet" href="../css/project.css">
@endsection

@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-7">
           <div class="card feature">
               <img class="card-img-top" src="{{$project['img']}}" alt="Card image cap" style="background-color:grey">
                 <div class="card-body">
                     <h2 class="card-title">{{$project['title']}}</h2>
                     <a href="{{$project['github']}}" target="_blank"><p class="card-title title-link">Github</p></a>
                     @if($project['demo'])
                        <a href="{{$project['demo']}}" target="_blank"><p class="card-title title-link">Demo</p></a>
                    @endif
                 </div>
           </div>
       </div>
       <div class="col-md-5">
           <div class="card detail">
               <div class="card-body">
                   <h4 class="card-title">Description</h4>
                   <p class="card-text">{{$project['description']}}</p>
               </div>
               <div class="card-body">
                   <h4 class="card-title">Code Highlights</h4>
                   <p class="card-text">{{$project['highlights']}}</p>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
