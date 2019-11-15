@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="display-3 text-center text-dark text-uppercase">Bienvenue sur Ms.wax</h1>
    <hr style="width: 100%;">
</div>

<div class="container">

<h2>1  Choisissez votre rubrique</h2>
<img class="card-img-top mr-2 w-100" src="{{asset('storage/explain/barre.png')}}"style="max-width: 100rem;">
<h2>2  Ajouter un article dans votre panier</h2> 
 <img class="card-img-top mr-2 w-100" src="{{asset('storage/explain/ajouter.png')}}" style="max-width: 20rem;">
  <br>
<h2>3 Poursuivez vos achats</h2> 
<img class="card-img-top mr-2 w-100" src="{{asset('storage/explain/panier.png')}}" style="max-width: 18rem;">

</div>
 @endsection
