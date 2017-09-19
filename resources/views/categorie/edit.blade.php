@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    
                    <form action="{{ route('categorie.update', ['id' => $categorie->id]) }}" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            Titre<br>
                            <input type="text" placeholder="Titre" value="{{ $categorie->titre }}" name="titre" class="form-control"><br>
                            Mots clés<br>
                            <input type="text" placeholder="Description courte" value="{{ $categorie->motscles }}" name="motscles" class="form-control"><br>
                            <button class="btn btn-primary" type="submit">Modifier</button>
                        </div>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection




