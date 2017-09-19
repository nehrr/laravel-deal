@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id membre</th>
                        <th>pseudo</th>
                        <th>nom</th>
                        <th>prénom</th>
                        <th>email</th>
                        <th>téléphone</th>
                        <th>civilité</th>
                        <th>statut</th>
                        <th>date enregistrement</th>
                        <th>actions</th>
                    </tr>
                </thead>

                @foreach($users as $user)

                <tbody>
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->telephone }}</td>
                        <td>{{ $user->civilite }}</td>
                        <td>{{ $user->statut == 1 ? 'Admin' : 'Membre' }}</td>
                        <td>{{ date('d/m/Y H:i', $user->created_at->timestamp) }}</td>
                        <td><a href=' {{ route('membre.show', ['id' => $user->id]) }} '><span class="glyphicon glyphicon-search"></span></a>
                            <a href="{{ route('membre.edit', ['id' => $user->id]) }}"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="{{ route('membre.remove', ['id' => $user->id]) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                </tbody>

                @endforeach
            </table>

            <form action=" {{ route('membre.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    Pseudo<br>
                    <input type="text" name="pseudo" placeholder="pseudo" class="form-control"><br>
                    Mot de passe<br>
                    <input type="password" name='mdp' placeholder="mot de passe" class="form-control"><br>
                    Nom<br>
                    <input type="text" name='nom' placeholder="nom" class="form-control"><br>
                    Prénom<br>
                    <input type="text" name='prenom' placeholder="prénom" class="form-control"><br>
                    Email<br>
                    <input type="text" name='email' placeholder="email" class="form-control"><br>
                    Téléphone<br>
                    <input type="text" name='tel' placeholder="téléphone" class="form-control"><br>
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
                    <button class="btn btn-primary" type="submit">Enregistrer</button>
            </form>

        </div>
    </div>
</div>
@endsection