@extends('layouts.master')

@section('content')

<div class="container">
    <div class="content">
        <div class="title">Créer des réalisateurs</div>
    </div>
</div>
</br>
</br>
<div class="formulaire">
    <form method="post" action="{{ route('directors_enregistrer') }}">
        {{--champs caché--}}
        {{ csrf_field() }}

        <label for="firstname">Prénom: </label>
        <input name="firstname" id="firstname" />

        <label for="lastname">Nom: </label>
        <input name="lastname" id="lastname" />

        <label  for="biography">Biography:</label>
        <textarea id = "biography" name="biography"></textarea>

        <label for="lastname">Nom: </label>
        <input name="lastname" id="lastname" />

</br>
        </br>

        <button style="color: orange" type="submit">Créer ce réalisateur</button>
</div>

</form>

</div>
@if(count($errors->all()))
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection

