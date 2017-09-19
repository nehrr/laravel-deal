@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

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
                        <td>{{ $note->id }}</td>
                        <td>{{ $note->id_membre1 }}</td>
                        <td>{{ $note->id_membre2}}</td>
                        <td> {{ $note->note }}</td>
                        <td> {{ $note->avis }}</td>
                        <td> {{ date('d/m/Y H:i', $note->created_at) }}</td>
                        <td><a href=' {{ route('note.show', ['id' => $note->id]) }} '><span class="glyphicon glyphicon-search"></span></a>
                            <a href="{{ route('note.edit', ['id' => $note->id]) }}"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="{{ route('note.remove', ['id' => $note->id]) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                </tbody>

                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection
