@extends('layout')

@section('content')

    <div class="container">
        <div class="content">
            <div class="titlelistfilm"><h2>Liste des Utilisateurs</h2></div>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
        <tr class="movielister">

            <th><h3>Like</h3></th>
            <th><h3>Image</h3></th>
            <th><h3>Username</h3></th>
            <th><h3>Ville</h3></th>
            <th><h3>Supprimer</h3></th>

        </tr>
        </thead>

        <div class="user">

            @foreach($user as $user)
                <tbody>
                <tr class="movieItems">

                    <td><a href="{{ route("user_panier", [
             'id' => $user->id
             ]) }}">
                            @if(!array_key_exists($user->id, session('id_user', [])))
                                <i class="fa fa-heart like"></i>
                            @else
                                <i class="fa fa-heart-o like"></i>
                            @endif
                        </a>
                    </td>

                    <td><img style="width: 20%" src="{{ $user->avatar }}"/></td>
                    <td><h4>{{ $user->username }}</h4></td>
                    <td><h4>{{ $user->ville }}</h4></td>
                    <td><h4><a class="suppr" href="{{route('user_supprimer', ['id' => $user->id ] )}}">Supprimer</a></h4><td>
                </tr>
                </tbody>
        @endforeach

    </table>

@endsection

