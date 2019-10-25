@extends('layouts.app')

@section('content')

@foreach($products as $article)
<div class="container">
  <div class="row mt-3 mb-5">
    <a href="{{$article->URL}}"><p class="display-4 text-dark"><u>{{$article->name}}</u></p></a>

    <img class="card-img-top" src="{{$article->photo}}" style="width: 300px;"> 
  
 <div class="ml-3">
 	<div class="row">
		<div>

    		<img class="card-img-top mr-2 ml-3 mt-3" src="{{$article->photo2}}" style="width: 100px;"> 
  			</div>
  					<div>
   			 		<img class="card-img-top mr-2 ml-3 mt-3" src="{{$article->photo3}}" style="width: 100px;">
 			 		</div>
  			<div>
   			 <img class="card-img-top mr-2 ml-3 mt-3" src="{{$article->photo4}}"  style="width: 100px;">

  			</div>
		</div>

<div class="card mt-5" style="width: 18rem;">
  <ul class="list-group list-group-flush">

@if($article->stock == 7)
    <li class="list-group-item text-success">en Stock</li>
@endif
@if(!$article->stock == 0 && $article->stock < 7)
    <li class="list-group-item"><strong>Il n'en reste plus que </strong>{{$article->stock}}</li>
@endif
@if($article->stock == 0)
    <li class="list-group-item text-danger">Rupture de stock</li>
@endif
    <li class="list-group-item"><strong>description</strong> : {{$article->description}}</li>

		</div>  

<div class="row mt-5"> 
  @if($article->stock == 0)
<h4 class="float-right">{{$article->price}} €</h4><a class=" btn btn-outline-danger ml-3">indisponible</a>
  @else
  <h4 class="float-right">{{$article->price}} €</h4>
  <a href="/add/{{$article->id}}" class="btn btn-danger ml-3">Ajouter au panier</a>
  @endif
</div>
	</div>
  </div>
 </div> 

@endforeach

@endsection
 
