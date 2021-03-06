@extends('layout')

@section('content')
    <div class="container">
        <div class="content">
            <div class="titlelistfilm"><h2>Compte</h2></div>
        </div>
    </div>
    </br>
    </br>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Compte</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" action="{{ route('modifier') }}">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->lastname }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Prénom</label>

                                <div class="col-md-6">image
                                    <input type="text" class="form-control" name="firstname" value="{{ Auth::user()->firstname }}">

                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">


                                <textarea class="form-control" name="description" id="textArea2" placeholder="" rows="3">
                                    {{ Auth::user()->description }}
                                </textarea>

                                </div>

                            </div>

                            <div>
                                <div class="form-group">


                                    <label class="col-md-6 control-label" for="title">Avatar: </label>
                                    <input type="file" capture="capture" accept="photo/*" name="photo" id="photo" />
                                    <img class="tof-avatar" src="{{ Auth::user()->photo }}" />

                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Adresse E-Mail </label>

                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Mot de passe</label>

                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Confirmez votre Mot de passe</label>

                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password_confirmation">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i>Enregistrer
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
