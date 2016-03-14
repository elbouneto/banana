@extends('layout')

@section('content')

<div class="container">
    <div class="content">
        <div class="title"><h2>Liste de nos films</h2></div>
    </div>
</div>
<table class="table table-hover">
    <thead>
    <tr>

        <th>Image</th>
        <th>Titre</th>
        <th>Synopsis</th>
        <th>Date de sortie</th>
        <th>Visibilité</th>
        <th>Supprimer</th>

    </tr>
    </thead>


<div class="films">
@foreach($movies as $movie)
    <h3>
        <a href="{{ route("movies_lister",
                [
                    "id" => $movie->id
                ]) }}">

        </a>
    </h3>


        <tbody>

        <tr>
            <td><img style="width: 70%" src="{{ $movie->image }}"/></td>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->synopsis }}</td>
            <td>{{ $movie->date_release }}</td>
            <td>@if($movie->visible == 0)
                    <a class="visible" href="{{route('movies_visible', [
            "id"=> $movie->id])}}"><span class="glyphicon glyphicon-eye-open"></span></a>
                @else
                    <a href="{{route('movies_visible', [
        "id"=> $movie->id])}}"><span class="glyphicon glyphicon-eye-close"></span></a>
                @endif</td>
            <td><a class="suppr" href="{{route('movies_supprimer', ['id' => $movie->id ] )}}">Supprimer</a></td>
        </tr>
        </tbody>

    @endforeach
</table>
</div>

    <div class="home">

        <a href="{{ route('static_welcome') }}">
            <button style="color: orange" type="text">Home</button>
        </a>



@endsection

