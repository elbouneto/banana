@extends('layout')

@section('content')
<div class="container">
    <div class="content">
        <div class="title">Créer Film</div>
    </div>
</div>
</br>
</br>
<div class="col-xs-12 col-sm-6 col-md-8">
    <form class="formmovie" method="post" action="{{ route('movies_enregistrer') }}">
        {{--champs caché--}}
        {{ csrf_field() }}

        <input type="text" id="inputStandard" class="form-control" placeholder="Votre Titre">

        </br></br>

        <textarea class="form-control" id="textArea2" placeholder="Votre Synopsis" rows="3"></textarea>



</br></br>


        <label for="languages">Langue : </label>
        <input type="radio" name="langue" value="fr"> fr
        <input type="radio" name="langue" value="en"> en
        <input type="radio" name="langue" value="es"> es

        </br></br>

        <label for="bo">Bo : </label>
        <input type="radio" name="bo" value="vo"> vo
        <input type="radio" name="bo" value="vost"> vost
        <input type="radio" name="bo" value="vostfr"> vostfr

        </br></br>

        <label  for="annee">Annee:</label>
        <input  id="annee" name="annee"/>

        </br></br>
        <label  for="date_release">date_release:</label>
        <input  id="date_release" name="date_release"/>

        </br></br>

        <button style="color: orange" type="submit">Créer le film</button>
</div>

</form>

@if(count($errors->all()))
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
@endsection
