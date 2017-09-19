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

            </table>

            

        </div>
    </div>
</div>
@endsection