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
                        <td><a href=' {{ route('membre.show', ['id' => $note->membre_id1]) }} '>{{ $note->membre_id1 }} - </a></td>
                        <td><a href=' {{ route('membre.show', ['id' => $note->membre_id2]) }} '>{{ $note->membre_id2}} - </a></td>
                        <td> {{ $note->note }}</td>
                        <td> {{ $note->avis }}</td>
                        <td> {{ date('d/m/Y H:i', $note->created_at->timestamp) }}</td>
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
