@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    
                    <form action="{{ route('annonce.update', ['id' => $annonce->id]) }}" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" placeholder="Titre" value="{{ $annonce->titre }}" name="titre" class="form-control"><br>
                            <input type="text" placeholder="Description courte" value="{{ $annonce->description_courte }}" name="description_courte" class="form-control"><br>
                            <textarea name="description_longue" cols="30" rows="10" class="form-control" placeholder="Description longue" > {{ $annonce->description_longue }} </textarea><br>
                            <input type='text' placeholder="Prix" value="{{ $annonce->prix }}" name='prix' class="form-control"><br>
                            <button class="btn btn-primary" type="submit">Modifier</button>
                        </div>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection




