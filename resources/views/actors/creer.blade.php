<!DOCTYPE html>
<html>
<head>
    <title>Page Créer actors</title>

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
        <div class="title">Créer des acteurs</div>
    </div>
</div>
</br>
</br>
<div class="formulaire">
    <form method="post" action="{{ route('actors_enregistrer') }}">
        {{--champs caché--}}
        {{ csrf_field() }}

        <label for="firstname">Prénom: </label>
        <input name="firstname" id="firstname" />

        <label for="lastname">Nom: </label>
        <input name="lastname" id="lastname" />

        <button style="color: orange" type="submit">Créer cet acteur</button>
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

