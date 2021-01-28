@extends('master')

@section('content')
    <div class="custom-product">
        <div class="col-sm-6">
            <div class="trending-wrapper">
                <h3>Produit recherché</h3> <br> <br>
                @foreach($products as $item)
                <div class="search-item">
                    <a href="detail/{{$item['id']}}">
                    <img class ="trending-img" src="{{$item['gallery']}}">
                    <div class="">
                        <h4>{{$item ['name']}} - {{$item ['price']}}€</h4>
                        <br> 
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
