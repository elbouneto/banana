@extends('layout')

@section('content')

    <h1 class="welcome_laracinema"><img  src="{{asset("img/logoV.png")}}"  class="welcome_logo"> Laracinéma</h1>
    <hr />


    <div class="row">
        <div class="col-md-3">

            <div class="panel panel-tile text-center">
                <div class="panel-body bg-danger rose">
                    <a href="{{ route('movies_lister') }}"><i class="fa fa-film text-muted fs70 mt10"></i></a>
                    <h1 class="fs35 mbn">{{ $nb }} sur {{ $nbtotal }}</h1>
                    <h4 class="text-white">Films Actifs</h4>
                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="panel panel-tile text-center">
                <div class="panel-body bg-warning bleu">
                    <a href="{{ route('actors_lister') }}"><i class="fa fa-star text-muted fs70 mt10"></i></a>
                    <h1 class="fs35 mbn">{{ $nbfrenchactors }} sur {{ $nbactors }}</h1>
                    <h4 class="text-white">Acteurs sont Français</h4>
                </div>

            </div>

        </div>
        <div class="col-md-3">

            <div class="panel panel-tile text-center">
                <div class="panel-body bg-danger violet">
                    <i class="fa  fa-eye text-muted fs70 mt10"></i>
                    <h1 class="fs35 mbn">{{ $nextseance }}</h1>
                    <h4 class="text-white">Séances à venir</h4>
                </div>

            </div>

        </div>
        <div class="col-md-3">

            <div class="panel panel-tile text-center">
                <div class="panel-body bg-warning chair">
                    <i class="fa fa-group text-muted fs70 mt10"></i>
                    <h1 class="fs35 mbn">X</h1>
                    <h4 class="text-white">Utilisateurs</h4>
                </div>

            </div>

        </div>
        <div class="col-md-3">

            <div class="panel panel-tile text-center">
                <div class="panel-body bg-warning chair">
                    <i class="fa fa-user text-muted fs70 mt10"></i>
                    <h1 class="fs35 mbn">{{ $moyenage }} ans</h1>
                    <h4 class="text-white">Age moyen d'acteurs</h4>
                </div>

            </div>

        </div>
        <div class="col-md-3">
        <div class="panel panel-tile text-center">
            <div class="panel-body bg-danger violet">
                <i class="glyphicon  glyphicon-usd text-muted fs70 mt10"></i>
                <h1 class="fs35 mbn">{{ $sumbudget }} €</h1>
                <h4 class="text-white">Budget total</h4>
            </div>
        </div>
        </div>

            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-warning bleu">
                        <i class="fa  fa-calendar text-muted fs70 mt10"></i>
                        <h1 class="fs35 mbn">{{ $moyenmovie }} h</h1>
                        <h4 class="text-white">Durée moyenne d'un film</h4>
                    </div>

                </div>
            </div>
        <div class="col-md-3">
            <div class="panel panel-tile text-center">
                <div class="panel-body bg-danger rose">
                    <i class="fa  fa-pencil-square-o text-muted fs70 mt10"></i>
                    <h1 class="fs35 mbn">{!!  str_repeat('<i class="fa fa-star"></i>', $notepress) !!} </h1>
                    <h4 class="text-white">Moyenne des notes</h4>
                </div>

            </div>
        </div>
    </div>

    <!-- User Group Widget -->
    <div class="col-md-6">
    <div class="panel user-group-widget">
        <div class="panel-heading">
                    <span class="panel-icon">
                        <i class="fa fa-users"></i>
                    </span>
            <span class="panel-title"> 16 Derniers Utilisateurs</span>
        </div>
        <div class="panel-menu">
            <div class="input-group ">
                      <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                      </span>
                <input type="text" class="form-control" placeholder="Search user...">
            </div>
        </div>
        <div class="panel-body panel-scroller pn" style="max-height: 513px;">
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/img/avatars/1.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/2.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/3.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/4.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row mt15">
                <div class="col-md-3">
                    <img src="assets/img/avatars/5.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/6.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/1.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/2.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row mt15">
                <div class="col-md-3">
                    <img src="assets/img/avatars/3.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/4.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/5.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/6.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row mt15">
                <div class="col-md-3">
                    <img src="assets/img/avatars/1.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/2.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/3.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/4.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row mt15">
                <div class="col-md-3">
                    <img src="assets/img/avatars/5.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/6.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/1.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/avatars/2.jpg" class="user-avatar">
                    <div class="caption">
                        <h5>Mike Pavlov
                            <br>
                            <small> Designer</small>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

    <div class="col-md-6">
        <div class="panel">
            <div class="panel-heading">
    <span class="panel-icon">
      <i class="fa fa-clock-o"></i>
    </span>
                <span class="panel-title"> 10 Prochaines Séances</span>
            </div>
            <div class="panel-body ptn pbn p10">
                <ol class="timeline-list">
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark rose">
                            <span class="fa fa-film"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Michael</b> Added to his store:
                            <a href="#">Ipod</a>
                        </div>
                        <div class="timeline-date">1:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark bleu">
                            <span class="fa fa-film"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Sara</b> Added his store:
                            <a href="#">Notebook</a>
                        </div>
                        <div class="timeline-date">3:05am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark violet">
                            <span class="fa fa-film"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                        </div>
                        <div class="timeline-date">4:15am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark chair">
                            <span class="fa fa-film"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Apple</a>
                        </div>
                        <div class="timeline-date">7:45am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark rose">
                            <span class="fa fa-film"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                        </div>
                        <div class="timeline-date">4:15am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark bleu">
                            <span class="fa fa-film"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Apple</a>
                        </div>
                        <div class="timeline-date">7:45am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark violet">
                            <span class="fa fa-film"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Michael</b> Added his store:
                            <a href="#">Ipod</a>
                        </div>
                        <div class="timeline-date">8:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark chair">
                            <span class="fa fa-film"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                        </div>
                        <div class="timeline-date">4:15am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark rose">
                            <span class="fa fa-film"></span>
                        </div>
                        <div class="timeline-desc">
                            <b>Sara</b> Added to his store:
                            <a href="#">Notebook</a>
                        </div>
                        <div class="timeline-date">3:05am</div>
                    </li>
                </ol>
            </div>
        </div>


    </div>

    <div class="col-md-6">


        <div class="panel listgroup-widget">
            <div class="panel-heading">
    <span class="panel-icon">
      <i class="fa fa-tag"></i>
    </span>
                <span class="panel-title"> Nombres</span>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge badge-primary">{{ $nbtotal }}</span>
                    Films
                </li>
                <li class="list-group-item">
                    <span class="badge badge-success">{{ $nbcategory }}</span>
                    Catégories
                </li>
                <li class="list-group-item">
                    <span class="badge badge-info">{{ $nbactors }}</span>
                    Acteurs
                </li>
                <li class="list-group-item">
                    <span class="badge badge-warning">{{ $nbdirectors }}</span>
                    Réalisateurs
                </li>
                <li class="list-group-item">
                    <span class="badge badge-danger">x</span>
                    Séances
                </li>
                <li class="list-group-item">
                    <span class="badge badge-alert">x</span>
                    Médias
                </li>
            </ul>
        </div>


    </div>




<!--   <img  src="{{asset("img/logoV.png")}}"  class="center-block" alt="">  -->

@endsection

