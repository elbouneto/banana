
<!DOCTYPE html>
<html>
<head>
    <title>Page Categories de films</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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
        .actors {
            text-align: center;
            line-height: 5px;
        }
        .creer {
            text-align: center;
        }
        a{
            text-decoration: none;
            color: #505559;
            font-size: 30px;

        }
        a:hover {
            color:orange;
            text-decoration:none;
        }
        .home{
            text-align: center;

        }
    </style>
</head>
<body>

<div class="container">
    <div class="content">
        <div class="title">Liste des acteurs</div>
    </div>
</div>

<p class="creer">
    <a href="{{ route('actors_creer') }}">
        Creer des acteurs
    </a>

</p>
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
