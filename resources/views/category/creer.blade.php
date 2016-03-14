<!DOCTYPE html>
<html>
<head>
    <title>Page Créer</title>

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
        <div class="title">Créer une catégorie</div>
    </div>
</div>

</br>
</br>
    <div class="formulaire">
    <form method="post" action="{{ route('category_enregistrer') }}">
        {{--champs caché--}}
        {{ csrf_field() }}

        <label for="title">Titre: </label>
        <input name="title" id="title" />

        <label>Description: </label>
        <textarea id="description" name="description">

        </textarea>

        <button style="color: orange" type="submit">Créer cette catégorie</button>
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