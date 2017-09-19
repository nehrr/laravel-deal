@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Trier par catégories
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Cat</a>
                </div>
            </div>


            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id annonce</th>
                        <th>titre</th>
                        <th>description courte</th>
                        <th>description longue</th>
                        <th>prix</th>
                        <th>photo</th>
                        <th>pays</th>
                        <th>ville</th>
                        <th>adresse</th>
                        <th>cp</th>
                        <th>membre</th>
                        <th>categorie</th>
                        <th>date d'enregistrement</th>
                        <th>actions</th>
                    </tr>
                </thead>



                @foreach($annonces as $annonce)

                <tbody>
                    <tr>
                        <td>{{ $annonce->id }}</td>
                        <td>{{ $annonce->titre }}</td>
                        <td>{{ $annonce->description_courte }}</td>
                        <td>{{ $annonce->description_longue }}</td>
                        <td>{{ $annonce->prix }}</td>
                        <td>{{ $annonce->photo }}</td>
                        <td>{{ $annonce->pays }}</td>
                        <td>{{ $annonce->ville }}</td>
                        <td> {{ $annonce-> adresse }}</td>
                        <td>{{ $annonce->cp }}</td>
                        <td>{{ $annonce->membre_id }}</td>
                        <td>{{ $annonce->categorie_id }}</td>
                        <td>{{ date('d/m/Y H:i', $annonce->created_at) }}</td>
                        <td><a href=' {{ route('annonce.show', ['id' => $annonce->id]) }} '><span class="glyphicon glyphicon-search"></span></a>
                            <a href="{{ route('annonce.edit', ['id' => $annonce->id]) }}"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="{{ route('annonce.remove', ['id' => $annonce->id]) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                </tbody>

                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection
