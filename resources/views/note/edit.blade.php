@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    
                    <form action="{{ route('note.update', ['id' => $note->id]) }}" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            Note<br>
                            <input type="text" placeholder="Titre" value="{{ $note->note }}" name="titre" class="form-control"><br>
                            Avis<br>
                            <textarea placeholder="Avis" name="avis" class="form-control">{{ $note->avis }}</textarea><br>
                            <button class="btn btn-primary" type="submit">Modifier</button>
                        </div>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection