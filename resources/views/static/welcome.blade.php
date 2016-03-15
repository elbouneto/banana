@extends('layout')

@section('content')

    <h3><i class="fa fa-dashboard"></i>Dashboard</h3>
    <hr />


    <div class="row">
        <div class="col-md-3">

            <div class="panel panel-tile text-center">
                <div class="panel-body bg-danger rose">
                    <i class="fa fa-film text-muted fs70 mt10"></i>
                    <h1 class="fs35 mbn">{{ $nb }} sur {{ $nbtotal }}</h1>
                    <h4 class="text-white">Films Actifs</h4>
                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="panel panel-tile text-center">
                <div class="panel-body bg-warning bleu">
                    <i class="fa fa-star text-muted fs70 mt10"></i>
                    <h1 class="fs35 mbn">{{ $nbfrenchactors }} sur {{ $nbactors }}</h1>
                    <h4 class="text-white">Acteurs sont Français</h4>
                </div>

            </div>

        </div>
        <div class="col-md-3">

            <div class="panel panel-tile text-center">
                <div class="panel-body bg-danger violet">
                    <i class="fa  fa-eye text-muted fs70 mt10"></i>
                    <h1 class="fs35 mbn">{{ $nb }}</h1>
                    <h4 class="text-white">Séances à venir</h4>
                </div>

            </div>

        </div>
        <div class="col-md-3">

            <div class="panel panel-tile text-center">
                <div class="panel-body bg-warning chair">
                    <i class="fa fa-group text-muted fs70 mt10"></i>
                    <h1 class="fs35 mbn">{{ $nb }}</h1>
                    <h4 class="text-white">Utilisateurs</h4>
                </div>

            </div>

        </div>
        <div class="col-md-3">

            <div class="panel panel-tile text-center">
                <div class="panel-body bg-warning chair">
                    <i class="fa fa-user text-muted fs70 mt10"></i>
                    <h1 class="fs35 mbn">{{ $nb }}</h1>
                    <h4 class="text-white">Age moyen d'acteurs</h4>
                </div>

            </div>

        </div>
        <div class="col-md-3">
        <div class="panel panel-tile text-center">
            <div class="panel-body bg-danger violet">
                <i class="glyphicon  glyphicon-usd text-muted fs70 mt10"></i>
                <h1 class="fs35 mbn">{{ $nb }}</h1>
                <h4 class="text-white">Budget total</h4>
            </div>
        </div>
        </div>

            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-warning bleu">
                        <i class="fa  fa-calendar text-muted fs70 mt10"></i>
                        <h1 class="fs35 mbn">{{ $nb }}</h1>
                        <h4 class="text-white">Durée moyenne d'un film</h4>
                    </div>

                </div>
            </div>
        <div class="col-md-3">
            <div class="panel panel-tile text-center">
                <div class="panel-body bg-danger rose">
                    <i class="fa  fa-pencil-square-o text-muted fs70 mt10"></i>
                    <h1 class="fs35 mbn">{{ $nb }}</h1>
                    <h4 class="text-white">Moyenne des notes</h4>
                </div>

            </div>
        </div>
    </div>

<img  src="{{asset("img/logoV.png")}}"  class="center-block" alt="">

@endsection

