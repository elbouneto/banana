@extends('layout')

@section('content')

<div class="container">
    <div class="content">
        <div class="title">Liste de nos films</div>
    </div>
</div>
<p class="creer">
    <a href="{{ route('movies_creer') }}">
        Creer un film
    </a>

</p>

</br>
<div class="films">
@foreach($movies as $movie)
    <h3>
        <a href="{{ route("movies_lister",
                [
                    "id" => $movie->id
                ]) }}">
            {{ $movie->title }}
        </a>
    </h3>
    <img style="width: 30%" src="{{ $movie->image }}"/>



    <p>

        @if($movie->visible == 0)
            <a href="{{route('movies_visible', [
            "id"=> $movie->id])}}">Visible</a>
            @else
        <a href="{{route('movies_visible', [
        "id"=> $movie->id])}}">Invisible</a>
            @endif
    </p>

        <p><a href="{{route('movies_supprimer', ['id' => $movie->id ] )}}">Supprimer</a></p>

    @endforeach

</div>

    <div class="home">

        <a href="{{ route('static_welcome') }}">
            <button style="color: orange" type="text">Home</button>
        </a>

@endsection

