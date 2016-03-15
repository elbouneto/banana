<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<!--header-->

<nav>

    <ul id="slide-out" class="side-nav">
        <li><a href="#!"></a></li>
        <li><a href="#!"></a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header">Laracinéma<i class="mdi-navigation-arrow-drop-down"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{ route('static_welcome') }}">Home</a></li>
                            <li><a href="{{ route('movies_lister') }}">Films</a></li>
                            <li><a href="{{ route('category_lister') }}">Catégories</a></li>
                            <li><a href="{{ route('actors_lister') }}">Acteurs</a></li>
                            <li><a href="{{ route('directors_lister') }}">Réalisateurs</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="right hide-on-med-and-down">
        <li><a href="#!"></a></li>
        <li><a href="#!"></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Laracinéma<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
        <ul id='dropdown1' class='dropdown-content'>
            <li><a href="{{ route('static_welcome') }}">Home</a></li>
            <li><a href="{{ route('movies_lister') }}">Films</a></li>
            <li><a href="{{ route('category_lister') }}">Catégories</a></li>
            <li><a href="{{ route('actors_lister') }}">Acteurs</a></li>
            <li><a href="{{ route('directors_lister') }}">Réalisateurs</a></li>
        </ul>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>



</nav>

<!-- le contenu  a changable-->
<div class="container">
    <div class="row general">
        @yield('content')
    </div>
</div>





<!--footer-->


<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Laracinéma</h5>
            </div>
            <div class="col l4 offset-l2 s12">
                <ul>
                    <li><a href="{{ route('static_welcome') }}">Home</a></li>
                    <li><a href="{{ route('movies_lister') }}">Films</a></li>
                    <li><a href="{{ route('category_lister') }}">Catégories</a></li>
                    <li><a href="{{ route('actors_lister') }}">Acteurs</a></li>
                    <li><a href="{{ route('directors_lister') }}">Réalisateurs</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2014 Copyright Text
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