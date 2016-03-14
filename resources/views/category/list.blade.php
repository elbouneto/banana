@extends('layout')

@section('content')
<div class="container">
    <div class="content">
        <div class="title"><h2>Categories de films</h2></div>
    </div>
</div>
</br>

<table class="table">
    <thead>
    <tr class="warning">

        <th>Titre</th>
        <th>Description</th>
        <th>Supprimer</th>
        <th>
            <code></code>
        </th>
    </tr>
    </thead>
<div class="category">
    @foreach($category as $category)


        <tbody>
        <tr>
            <td>{{ $category->title }}</td>
            <td>{{ $category->description }}</td>
            <td><a href="{{route("category_supprimer", ['id' => $category->id ] )}}">Supprimer</a></td>
        </tr>



    @endforeach
</table>

</div>
</body>
<footer>
    </br>
    </br>
    <div class="home">

        <a href="{{ route('static_welcome') }}">
            <button style="color: orange" type="text">Home</button>
        </a>
    </div>
</footer>
</html>
@endsection