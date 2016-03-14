@extends('layout')

@section('content')

<div class="container">
    <div class="content">
        <div class="title">Liste des acteurs</div>
    </div>
</div>


<div class="actors">

    @foreach($actors as $actor)
        <h5>{{ $actor->firstname }}</h5>
        <p>{{ $actor->lastname }}</p>
        <img style="width: 30%" src="{{ $actor->image }}"/>

        <p><a href="{{route('actors_supprimer', ['id' => $actor->id ] )}}">Supprimer</a></p>

    @endforeach
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