@extends('layout')

@section('content')


<div class="container">
    <div class="content">
        <div class="titlelistfilm"><h2>Créer une catégorie</h2></div>
    </div>
</div>
</br>
</br>
    <div class="formulaire">

        <div class="col-xs-12 col-sm-6 col-md-8">
    <form method="post"
          enctype="multipart/form-data"
          action="{{ route('category_enregistrer') }}">

        {{--champs caché--}}
        {{ csrf_field() }}


        <label for="title">Image: </label>
        <input type="file" capture="capture" accept="image/*" name="image" id="image" />

        </br></br>

        <label for="title">Titre: </label>
        <input type="text" id="inputStandard" name="title" class="form-control" placeholder="Votre Titre">

        </br></br>

        <label>Description: </label>

        <textarea name="description" class="form-control" id="textArea2" placeholder="Votre Description" rows="3"></textarea>


        </br></br>

        <button style="color: #F0857A" type="submit">Créer cette catégorie</button>
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