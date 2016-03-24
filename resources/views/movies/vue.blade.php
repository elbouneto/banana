@extends('layout')

@section('content')

    <div class="container">
        <div class="content">
            <div class="col-md-8 films">
            <div class="titrefilmcenter">
            <div class="titlelistfilm"><h2>{{ $movies->title }}</h2></div>
        </div>
        </div>
    </div>
    </div>
</br>
    </br>

    <div class="col-md-8 films">
    <tr class="movieItems">
        <td><img style="width: 50%" src="{{ $movies->image }}"/></td>
        </br>
        </br>
        <td>{{ $movies->type }}</td>
        </br>
        </br>
        <td>{{ $movies->synopsis }}</td>
        </br>
        </br>
        <td>Distributeur : {{ $movies->distributeur }}</td>
        </br>
        </br>
        <td>Année de production : {{ $movies->annee }}</td>
        </br>
        </br>
        <td>Date de sortie : {{ $movies->date_release }}</td>

    </tr>
    </div>

@endsection