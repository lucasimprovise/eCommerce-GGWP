@extends('master')

@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table caption-top">
                <caption>RECAPITULATIF</caption>
                <thead>
                    <tr>
                        <th scope="col">Commande</th>
                        <th scope="col">Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>{{$total}}€</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>5€</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Total : {{$total+5}}€</td>
                    </tr>
                </tbody>
            </table>

            <div>
                <form action="/myorders" method="POST" >
                    @csrf

                        <div class="col-md-4">
                            <label class=form-label>Adresse : </label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="col-md-4">
                            <label for="pwd">Méthode de paiement :</label> <br> <br>
                            <input type="radio" value="cash" name="payment"> <span>Carte bancaire</span> <br> <br>
                            <input type="radio" value="cash" name="payment"> <span>Paypal</span> <br><br>
                            <input type="radio" value="cash" name="payment"> <span>Prélèvement</span> <br> <br>
                        </div>
                    <button type="submit" class="btn btn-default">Passer la commande</button>
                </form>
            </div>
        </div>
    </div>
@endsection