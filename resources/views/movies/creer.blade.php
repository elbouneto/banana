@extends('layout')

@section('content')

<div class="container">
    <div class="content">
        <div class="titlelistfilm"><h2>Créer Film</h2></div>
    </div>
</div>
<div class="crea">
<div class="col-xs-12 col-sm-6 col-md-8">
    <form class="formmovie" method="post" action="{{ route('movies_enregistrer') }}">
        {{--champs caché--}}
        {{ csrf_field() }}

        <input type="text" id="inputStandard" class="form-control" placeholder="Votre Titre">

        </br></br>

        <textarea class="form-control" id="textArea2" placeholder="Votre Synopsis" rows="3"></textarea>



</br></br>

        <div>
        <h5>Langue</h5>
        <label class="radio-inline mr10">
            <input name="langue" id="langue" value="fr" type="radio"> Français
        </label>
        <label class="radio-inline mr10">
            <input name="langue" id="langue" value="en" type="radio"> Anglais
        </label>
        <label class="radio-inline mr10">
            <input name="langue" id="langue" value="es" type="radio"> Espagnol
        </label>

        </div>

        </br></br>

        <div>
        <h5>Bo</h5>
        <label class="radio-inline mr10">
            <input name="bo" id="bo" value="vo" type="radio"> Version Originale
        </label>
        <label class="radio-inline mr10">
            <input name="bo" id="bo" value="vost" type="radio"> Version Originale Sous-Titrée
        </label>
        <label class="radio-inline mr10">
            <input name="bo" id="bo" value="vostfr" type="radio"> Version Originale Sous-Titrée Français
        </label>

        </div>
        </br></br>


        <label  for="annee">Année</label>
        <input class="form-control" id="annee" name="annee"/>

        </br></br>
        <label  for="date_release">Date de sortie</label>
        <input  class="form-control" id="date_release" name="date_release"/>

        </br></br>

        <label for="title">Image: </label>
        <input type="file" capture="capture" accept="image/*" name="image" id="image" />

        </br>
        </br>

        <button style="color: #F0857A" type="submit">Créer le film</button>
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
