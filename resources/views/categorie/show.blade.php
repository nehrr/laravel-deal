@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id categorie</th>
                        <th>titre</th>
                        <th>mots clés</th>
                        <th>actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->titre }}</td>
                        <td>{{ $categorie->motscles }}</td>
                        <td><a href=' {{ route('categorie.show', ['id' => $categorie->id]) }} '><span class="glyphicon glyphicon-search"></span></a>
                            <a href="{{ route('categorie.edit', ['id' => $categorie->id]) }}"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="{{ route('categorie.remove', ['id' => $categorie->id]) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>
        
        
</div>
@endsection
