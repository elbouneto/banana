@extends('layout')

@section('content')


    <div class="container">
        <div class="content">
            <div class="titlelistfilm"><h2>Créer un Utilisateur</h2></div>
        </div>
    </div>

    <div class="formulaire">

        <div class="col-xs-12 col-sm-6 col-md-8">

            <form method="post"
                  enctype="multipart/form-data"
                  action="{{ route('user_enregistrer') }}">
                {{--champs caché--}}
                {{ csrf_field() }}

                </br></br>

                <label for="username">Username: </label>
                <input type="text" id="inputStandard" name="username" class="form-control" id="username" />

                </br></br>

                <label for="ville">Ville: </label>
                <input type="text" id="inputStandard" name="ville" class="form-control" id="ville" />

                </br></br>



                <div class="input-group">
                <span class="input-group-addon">
                <i class="fa fa-envelope-o"></i>
                </span>
                    <input class="form-control" placeholder="Email address" type="text">
                </div>

                </br> </br>

                <div class="input-group">
                <span class="input-group-addon">
                <i class="fa fa-key"></i>
                </span>
                    <input class="form-control" placeholder="Password" type="password">
                </div>




                </br> </br>

                <label for="title">Avatar: </label>
                <input type="file" capture="capture" accept="image/*" name="image" id="image" />

                </br></br>


                <button style="color: #F0857A" type="submit">Créer cet Utilisateur</button>
        </div>

        </form>

    </div>

























@endsection
