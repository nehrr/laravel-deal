@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id categorie</th>
                        <th>titre</th>
                        <th>mots clés</th>
                        <th>actions</th>
                    </tr>
                </thead>



                @foreach($categories as $categorie)

                <tbody>
                    <tr>
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->titre }}</td>
                        <td>{{ $categorie->motscles }}</td>
                        <td><a href=''><span class="glyphicon glyphicon-search"></span></a>
                            <a href="{{ route('categorie.edit', ['id' => $categorie->id]) }}"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="{{ route('categorie.remove', ['id' => $categorie->id]) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                </tbody>

                @endforeach
            </table>
            
            <form action=" {{ route('categorie.store') }}" method="POST">
                 {{ csrf_field() }}
                 <div class="form-group">
                     Titre<br>
                     <input type="text" name="titre" placeholder="Titre de la catégorie" class="form-control"><br>
                     Description courte<br>
                     <textarea name='motscles' placeholder="Mots clés" class="form-control"></textarea>
                     <button class="btn btn-primary" type="submit">Enregistrer</button>
            </form>

        </div>
    </div>
        
        
</div>
@endsection
