@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            
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
                
                <tbody>
                    <tr>
                        <td>{{ $annonce->id_annonce }}</td>
                        <td>{{ $annonce->titre }}</td>
                        <td>{{ $annonce->description_courte }}</td>
                        <td>{{ $annonce->description_longue }}</td>
                        <td>{{ $annonce->prix }}</td>
                        <td>{{ $annonce->photo }}</td>
                        <td>{{ $annonce->pays }}</td>
                        <td>{{ $annonce->ville }}</td>
                        <td>{{ $annonce->cd }}</td>
                        <td>{{ $annonce->membre_id }}</td>
                        <td>{{ $annonce->categorie_id }}</td>
                        <td>{{ $annonce->date_enregistrement }}</td>
                        <td>xx</td>
                    </tr>
                </tbody>
                
            </table>
           
        </div>
    </div>
</div>
@endsection
