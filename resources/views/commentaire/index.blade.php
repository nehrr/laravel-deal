@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

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



                @foreach($commentaires as $commentaire)

                <tbody>
                    <tr>
                        <td>{{ $commentaire->id_commentaire }}</td>
                        <td>{{ $commentaire->id_membre }}</td>
                        <td>{{ $commentaire->id_annonce }}</td>
                        <td> {{ $commentaire->commentaire }}</td>
                        <td> {{ $commentaire->created_at }}</td>
                        <td><a href=' {{ route('commentaire.show', ['id' => $commentaire->id]) }} '><span class="glyphicon glyphicon-search"></span></a>
                            <a href="{{ route('commentaire.edit', ['id' => $commentaire->id]) }}"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="{{ route('commentaire.remove', ['id' => $commentaire->id]) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                </tbody>

                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection
