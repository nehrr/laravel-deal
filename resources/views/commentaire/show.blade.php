@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id commentaire</th>
                        <th>id membre</th>
                        <th>id annonce</th>
                        <th>commentaire</th>
                        <th>date d'enregistrement</th>
                        <th>actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $commentaire->id }}</td>
                        <td>{{ $commentaire->membre_id }}</td>
                        <td>{{ $commentaire->annonce_id }}</td>
                        <td> {{$commentaire->commentaire}}</td>
                        <td>{{ date('d/m/Y H:i', $commentaire->created_at->timestamp) }}</td>
                        <td><a href=' {{ route('commentaire.show', ['id' => $commentaire->id]) }} '><span class="glyphicon glyphicon-search"></span></a>
                            <a href="{{ route('commentaire.edit', ['id' => $commentaire->id]) }}"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="{{ route('commentaire.remove', ['id' => $commentaire->id]) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>
        
        
</div>
@endsection
