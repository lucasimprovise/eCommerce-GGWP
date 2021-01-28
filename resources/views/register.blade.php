@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row" >
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="POST">
                @csrf

                <div class="form-group" required>
                    <label for="text">Nom entier</label>
                    <input type="text" name="text" class="form-control" id="prenom" aria-describedby="nomentierEx" placeholder="Maxens Dupuy">
                </div>

                <div class="form-group">
                    <label for="date">Date de naissance</label>
                    <input type="date" name="date" class="form-control" id="date" aria-describedby="dateEx" placeholder="dd/mm/yyyy">
                </div>

                <div class="form-group" required>
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@email.com">
                </div>

                <div class="form-group" required>
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>
        </div>
    </div>
</div>
@endsection
