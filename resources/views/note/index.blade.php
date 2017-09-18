@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id note</th>
                        <th>id membre 1</th>
                        <th>id membre 2</th>
                        <th>note</th>
                        <th>avis</th>
                        <th>date d'enregistrement</th>
                        <th>actions</th>
                    </tr>
                </thead>



                @foreach($notes as $note)

                <tbody>
                    <tr>
                        <td>{{ $note->id_note }}</td>
                        <td>{{ $note->id_membre1 }}</td>
                        <td>{{ $note->id_membre2}}</td>
                        <td> {{ $note->note }}</td>
                        <td> {{ $note->avis }}</td>
                        <td> {{ $note->created_at }}</td>
                        <td>xx</td>
                    </tr>
                </tbody>

                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection
