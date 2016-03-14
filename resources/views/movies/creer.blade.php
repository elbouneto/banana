
<!DOCTYPE html>
<html>
<head>
    <title>Page Créer Films</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        .container {
            text-align: center;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 60px;
            color: orange;
        }
        .formulaire {
            text-align: center;

        }
        .home{
            text-align: center;

        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Créer Film</div>
    </div>
</div>
</br>
</br>
<div class="formulaire">
    <form method="post" action="{{ route('movies_enregistrer') }}">
        {{--champs caché--}}
        {{ csrf_field() }}

        <label for="title">Titre:</label>
        <input  name="title" id="title"/>

        </br></br>

        <label  for="synopsis">Synopsis:</label>
        <textarea id = "synopsis" name="synopsis"></textarea>

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
</br>
</br>
</br>
</br>
<div class="home">

    <a href="{{ route('static_welcome') }}">
        <button style="color: orange" type="text">Home</button>
    </a>
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
</body>
</html>

