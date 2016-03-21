@extends('layout')

@section('content')


    <div class="container">
        <div class="content">
            <div class="titlelistfilm"><h2>Créer un acteur</h2></div>
        </div>
    </div>

</br>
</br>
<div class="formulaire">
    <div class="col-xs-12 col-sm-6 col-md-8">
    <form method="post"
          enctype="multipart/form-data"
          action="{{ route('actors_enregistrer') }}">
        {{--champs caché--}}
        {{ csrf_field() }}

        </br></br>

        <label for="firstname">Prénom: </label>
        <input class="form-control" name="firstname" id="firstname" />

        </br>
        </br>

        <label for="lastname">Nom: </label>
        <input class="form-control" name="lastname" id="lastname" />

        </br>
        </br>


        <label for="title">Image: </label>
        <input type="file" capture="capture" accept="image/*" name="image" id="image" />

        </br>
        </br>
    <button style="color: #F0857A" type="submit">Créer un Acteur</button>

    </form>
    </div>
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
