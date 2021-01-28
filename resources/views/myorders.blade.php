@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Ma commande</h4>
            @foreach($order as $item)
            <div class=" row searched-item cart-list-devider">

                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}">
                    </a>
                </div>

                <div class="col-sm-4">
                    <div class="">
                        <h2>Nom : {{$item->name}}</h2>
                        <h5>Livraison : {{$item->status}}</h5>
                        <h5>Adresse : {{$item->address}}</h5>
                        <h5>Statut du paiement : {{$item->payment_status}}</h5>
                        <h5>Méthode de paiement : {{$item->payment_method}}</h5>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection 