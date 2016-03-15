@extends('layout')

@section('content')

<div class="container">
    <div class="content">
        <div class="titlelistfilm"><h2>Categories de films</h2></div>
    </div>
</div>

    <table class="table table-hover">
        <thead>
        <tr class="movielister">

            <th><h3>Titre</h3></th>
            <th><h3>Description</h3></th>
            <th><h3>Supprimer</h3></th>

        </tr>
        </thead>
<div class="category">
    @foreach($category as $category)


        <tbody>
        <tr class="movieItems">
            <td><h4>{{ $category->title }}</h4></td>
            <td><h4>{{ $category->description }}</h4></td>
            <td><h4><a class="suppr" href="{{route("category_supprimer", ['id' => $category->id ] )}}">Supprimer</a></h4></td>
        </tr>
        </tbody>


    @endforeach
</table>

@endsection