@extends('layout')

@section('content')

<div class="container">
    <div class="content">
        <div class="titlelistfilm"><h2>Liste de nos films</h2></div>
    </div>
</div>
<table class="table table-hover">
    <thead>
    <tr class="movielister">

        <th><h3>Image</h3></th>
        <th><h3>Titre</h3></th>
        <th><h3>Synopsis</h3></th>
        <th><h3>Date</h3></th>
        <th><h3>Visibilité</h3></th>
        <th><h3>Supprimer</h3></th>

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

        <tr class="movieItems">
            <td><img style="width: 70%" src="{{ $movie->image }}"/></td>
            <td>{{ $movie->title }}</td>
            <td class="movietext">{{ $movie->synopsis }}</td>
            <td>{{ $movie->date_release }}</td>
            <td>@if($movie->visible == 0)
                    <a class="visible" href="{{route('movies_visible', [
            "id"=> $movie->id])}}"><h3><span class="glyphicon glyphicon-eye-open"></span></h3></a>
                @else
                    <a href="{{route('movies_visible', [
        "id"=> $movie->id])}}"><h3><span class="glyphicon glyphicon-eye-close"></span></h3></a>
                @endif</td>
            <td><h4><a class="suppr" href="{{route('movies_supprimer', ['id' => $movie->id ] )}}">Supprimer</a></h4></td>
        </tr>
        </tbody>

    @endforeach
</table>
</div>





@endsection

