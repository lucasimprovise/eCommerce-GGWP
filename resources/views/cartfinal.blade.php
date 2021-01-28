@extends('master')

@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3>Panier</h3>
                <a class="btn btn-success" href="/order">Finaliser la commande</a> <br> <br>
                <div class="">
                    @foreach($products as $item)

                    <div class="col-sm-3">
                        <a href="detail/{{$item->id'}}">
                            <img class ="trending-img" src="{{$item->gallery}}">
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <div class="">
                            <h3>{{$item->name}}</h3>
                            <h4>{{$item->price}}€</h4>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <a href="/removecart/{{$item.->cart_id}" class="btn btn-warning">Supprimer</a>
                    </div>

                    @endforeach
                </div>
                <a class="btn btn-success" href="/order">Finaliser la commande</a> <br> <br>    
            </div>
        </div>
    </div>
@endsection