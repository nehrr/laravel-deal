@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">

                    <form action="{{ route('commentaire.update', ['id' => $commentaire->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            Commentaire<br>
                            <input type="text" name="commentaire" placeholder="commentaire" value="{{ $commentaire->commentaire }}" class="form-control"><br>
                        </div>
                        <button class="btn btn-primary" type="submit">Modifier</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection