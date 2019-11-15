@extends('layouts.app')

@section('content')

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mon panier</th>
      <th scope="col">Produit</th>
      <th scope="col">quantité</th>
      <th scope="col">prix</th>
    </tr>
  </thead>

  <tbody>

@if(session('cart'))
   @foreach(session('cart') as $id => $details)

@if($details)
      <?php $total += $details['price'] * $details['quantity'] ?>

    <tr class="mt-3">
      <th scope="row"><img class="thumnail" src="{{$details['photo']}}" style="width: 200px;"></th>
          <td> <h5><strong>{{$details['name']}}</strong></h5> <br><br><p class="text-justify"><strong>Description : </strong>{{$details['description']}}</p>
            <br><p class="text-justify"><strong>Taille : </strong>&nbsp;{{$details['size']}}</p>

<form action="/s/select/{{$details['id']}}" method="POST">
  @csrf
      <button name="size_s" type="submit" class="btn btn-outline" style="border-radius: 30px; font-size: 10px;">S</button>
        <button name="size_m" type="submit" class="btn btn-outline" style="border-radius: 30px; font-size: 10px;">M</button>
        <button name="size_l" type="submit" class="btn btn-outline" style="border-radius: 30px; font-size: 10px;">L</button>
      <button name="size_xl" type="submit" class="btn btn-outline" style="border-radius:30px; font-size: 10px;">XL</button>
</form>

@if($details['size'])
<button class="btn btn-outline-primary mt-5" data-toggle="modal" data-target="#exampleModal">Acheter</button>
@else
<button class="btn btn-outline-primary mt-5" disabled="true" title="Selectionnez la taille">Acheter</button>
@endif
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mode de paiment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
         </button>
        </div>
        <div class="modal-body d-flex">
        <i class=" ml-5 pl-4 fa fa-paypal mr-5" style="font-size:40px; color: blue;"></i>
        <i class="fa fa-cc-visa mr-5" style="font-size:40px; color : blue;"></i>
        <i class='fab fa-cc-apple-pay mr-5' style="font-size:40px;"></i>
        <i class='fab fa-bitcoin mr-5' style="font-size:40px; color: orange;"></i>
        </div>

      <div class="modal-footer">
        <!-- <p class="">merci merci blah blah blaah blah blah blah blah blah</p> -->
      </div>
    </div>
  </div>
</div>

 <a href="{{ route('remove.product', ['id' => $details['id']] ) }}" class="btn btn-danger mt-5 ">supprimer</a>
</td>

<td>
  <form method="POST" action="/quantity/{{$details['id']}}">
    @csrf
<div class="input-group ">
  <div class="input-group-prepend">
    <button name="minus" type="submit" class="btn btn-outline" style="border-radius: 30px; font-size: 10px;">
      <i class='fas fa-minus'></i></button>
  </div>
&nbsp;<h5>{{$details['quantity']}}</h5>&nbsp;
  <div class="input-group-append">
    <button name="plus" type="submit" class="btn btn-outline" style="border-radius: 30px; font-size: 10px;">
      <i class='fas fa-plus'></i></button>
  </div>
</div>
</form>
</td> 
<td><strong>{{$details['price']}}</strong></td> 
@endif
</tr>
  @endforeach
<td><strong>Total:</strong> {{$total}} $</td>
</tbody>
@endif

</table>
@if(!session('cart'))
    
      <div class="mx-auto mt-5 pt-5" style="width: 500px; font-size: 20px;">
        <p class="text-muted">Votre panier est vide pour le moment...</p>
        <a href="/" class="btn btn-warning"><i class='fas fa-angle-left'></i> faire mes emplettes</a>
      </div>
@endif
</div>
@endsection
