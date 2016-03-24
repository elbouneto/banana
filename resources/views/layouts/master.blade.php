<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,700italic,700,600italic,600,400italic,300italic' rel='stylesheet' type='text/css'>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<!--header-->

<nav>
    <img  src="{{asset("img/logoV.png")}}" class="logod">

    <ul class="right hide-on-med-and-down">
        <li><a href="#!"></a></li>
        <li><a href="#!"></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><h5 class="lara">Laracinéma</h5><i class="mdi-navigation-arrow-drop-down right"></i></a></li>
        <ul id='dropdown1' class='dropdown-content'>
            <li><a href="{{ route('static_welcome') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        </ul>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>



</nav>

<!-- le contenu  a changable-->
<main>
<div class="container">
    <div class="row general">
        @yield('content')
    </div>
</div>
    </div>

    <div class="social right">
        <a href="https://fr-fr.facebook.com" target="_blank"><i class="fa fa-facebook-square"></i></a>
        <a href="https://twitter.com/?lang=fr" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://plus.google.com/collections/featured" target="_blank"><i class="fa fa-google-plus-square"></i></a>


    </div>

</main  >



<!--footer-->


<footer class="page-footer">
    <div class="container">
        <div class="row">


        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            Laracinéma © 2016 Copyright 3WA
            <a class="grey-text text-lighten-4 right" href="#!"></a>
        </div>
    </div>
</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<!-- import js file-->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>