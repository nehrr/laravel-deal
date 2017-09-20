@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <img src="/img/{{$photo->photo1}}"><br>
            <img src="/img/{{$photo->photo2}}"><br>
            <img src="/img/{{$photo->photo3}}"><br>
            <img src="/img/{{$photo->photo4}}"><br>
            <img src="/img/{{$photo->photo5}}"><br>

        </div>
    </div>


</div>
@endsection
