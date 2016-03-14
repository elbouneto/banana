
<!DOCTYPE html>
<html>
<head>
    <title>Liste des Realisateurs</title>

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
        .directors {
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
