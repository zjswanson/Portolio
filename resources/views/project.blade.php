@extends('layouts.app')

@section('headSection')
<link rel="stylesheet" href="/css/project.css">
@endsection

@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8">
           <div class="card feature">
               <img class="card-img-top" src="..." alt="Card image cap" style="background-color:grey">
                 <div class="card-body">
                   <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 </div>
           </div>
       </div>
       <div class="col-md-4">
           <div class="card detail">
               <div class="card-header">
                   <h2 class="card-title">Category Name</h2>
               </div>
               <div class="card-body">
                   <h4 class="card-title">Feature Name</h4>
                   <p class="card-text">Feature Details</p>
               </div>
               <div class="card-body">
                   <h4 class="card-title">Feature Name</h4>
                   <p class="card-text">Feature Details</p>
               </div>
           </div>
       </div>
   </div>
</div>


@endsection
