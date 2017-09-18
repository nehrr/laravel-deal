<!doctype html>
@extends('layouts.app')


<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Deal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>

    @section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            @else
            <a href="{{ route('login') }}">Se connecter</a>
            <a href="{{ route('register') }}">S'enregistrer</a>
            @endauth
        </div>
        @endif

    </div>

    <div class="col-md-4 col-md-offset-1">
        Catégorie<br>
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Toutes les catégories
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Cat</a>
            </div>
        </div><br>

        Région<br>
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Toutes les régions
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Cat</a>
            </div>
        </div><br>

        Membre<br>
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tous les membres
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Cat</a>
            </div>
        </div><br>

        Prix<br>
        <input type="range" value='0' max='1000' min="0" step="10" ><br>

    </div>

    <div class="col-md-8">

        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Trier par prix (du moins cher au plus cher)
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Cat</a>
            </div>
        </div><br>

        <table class="table">
            
            <tbody>
                @foreach($annonces as $annonce)
                <tr>
                    <td>{{ $annonce->photo }}</td>
                    <td> <a href="{{ route('annonce.show', ['id_annonce' => $annonce->id_annonce]) }}"> {{ $annonce->titre }}
                    </a><br>
                        {{ $annonce->description_longue }}<br>
                    {{ $annonce->avis-></td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    @endsection
