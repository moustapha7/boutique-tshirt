@extends('home')
@section('content')
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
         @foreach($produits as $produit) 
        <div class="col">
          <div class="card shadow-sm">
            <img class="card-img-top" src="{{asset('produits/'.$produit->photo_principale)}}"  alt="card img top">

            <div class="card-body">
              <p class="card-text">{{$produit->nom}}  <br> {{$produit->description}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="price">{{ number_format($produit->prix_ht, 2)}} €</span>
                  <a href="{{route('detailProduit',['id'=>$produit->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                </div>
               
              </div>
            </div>
          </div>
        </div>
        @endforeach
      
      </div>
    </div>
  </div>

  @endsection