@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>

        <div class="col-sm-6">
                <a href="/">Go back</a>
            <h2>{{$product['name']}} </h2>
            <h4>Prix : {{$product['price']}}€</h4>
            <h5>Categorie : {{$product['category']}}</h5>
            
            <br>

            <form action="/add_to_cart" method="POST">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
                <button class="btn btn-success">Ajouter panier</button>
            </form>
        </div>

        
    </div>
</div>

<div class="container">
    <div class="dropdown-divider">
        <h3>Informations sur le jeu :</h3>
        <h4>{{$product['description']}}</h4>
    </div>

    <div>
        <h3>Avis : </h3>
        <!-- mettre un code qui puisse récupérer les commentaires des acheteurs -->
    </div>
</div>
@endsection
