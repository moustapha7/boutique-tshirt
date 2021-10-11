@extends('home')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                @foreach ($produits as $produit)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{ asset('produits/' . $produit->photo_principale) }}"
                                alt="card img top">

                            <div class="card-body">
                                <p class="card-text">{{ $produit->nom }} <br> {{ $produit->description }}</p>
                                <p class="card-text">
                                    <span class="badge badge-info">
                                         <a class="text-white" href="{{route('voir_produit_par_cate',['id'=>$produit->category->id])}}">{{ $produit->category->nom }}</a>
                                    </span> 
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="price">{{ number_format($produit->prix_ht, 2) }} €</span>
                                        <a  href="{{ route('detailProduit', ['id' => $produit->id]) }}"
                                            class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
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
