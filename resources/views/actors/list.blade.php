@extends('layout')

@section('content')

<div class="container">
    <div class="content">
        <div class="titlelistfilm"><h2>Liste des acteurs</h2></div>
    </div>
</div>

<table class="table table-hover">
    <thead>
    <tr class="movielister">

        <th><h3>Photo</h3></th>
        <th><h3>Nom</h3></th>
        <th><h3>Prénom</h3></th>
        <th><h3>Supprimer</h3></th>

    </tr>
    </thead>


<div class="actors">

    @foreach($actors as $actor)
        <tbody>
            <tr class="movieItems">
                <td><img style="width: 30%" src="{{ $actor->image }}"/></td>
                <td><h4>{{ $actor->firstname }}</h4></td>
                <td><h4>{{ $actor->lastname }}</h4></td>
                <td><h4><a class="suppr" href="{{route('actors_supprimer', ['id' => $actor->id ] )}}">Supprimer</a></h4><td>
            </tr>
        </tbody>
    @endforeach
</div>

@endsection