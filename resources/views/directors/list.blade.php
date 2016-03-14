@extends('layout')

@section('content')
<div class="container">
    <div class="content">
        <div class="title">Liste des Réalisateurs</div>
    </div>
</div>

<p class="creer">
    <a href="{{ route('directors_creer') }}">
        Creer des réalisateur
    </a>

</p>
<div class="directors">

    @foreach($directors as $director)
        <h5>{{ $director->firstname }}</h5>
        <p>{{ $director->lastname }}</p>
        <img style="width: 30%" src="{{ $director->image }}"/>

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