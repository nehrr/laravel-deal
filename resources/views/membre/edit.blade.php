@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">

                    <form action="{{ route('membre.update', ['id' => $user->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            Pseudo<br>
                            <input type="text" name="pseudo" placeholder="pseudo" value="{{ $user->name }}" class="form-control"><br>
                            Nom<br>
                            <input type="text" name='nom' placeholder="Nom" value="{{ $user->nom }}" class="form-control"><br>
                            Prénom<br>
                            <input type="text" name='prenom' placeholder="prénom" value="{{ $user->prenom }}" class="form-control"><br>
                            Email<br>
                            <input type="text" name='email' placeholder="email" value="{{ $user->email }}" class="form-control"><br>
                            Téléphone<br>
                            <input type="text" name='tel' placeholder="téléphone" value="{{ $user->telephone }}" class="form-control"><br>
                            Civilité<br>
                            <select name='civilite' class="form-control form-control-sm">
                                <option value='m'>Homme</option>
                                <option value='f'>Femme</option>
                            </select>
                            Statut<br>
                            <select name='statut' class="form-control form-control-sm">
                                <option value='1'>Admin</option>
                                <option value='0'>Membre</option>
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Modifier</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection




