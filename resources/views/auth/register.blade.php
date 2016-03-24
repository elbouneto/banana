@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading log"><h5><i class="fa fa-cogs"></i>
                        Créer un Compte</h5></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}
</br>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"><i class="material-icons">perm_identity</i> Nom</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"><i class="material-icons">perm_identity</i> Prénom</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">

                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"><i class="material-icons">assignment</i> Description</label>

                            <div class="col-md-6">


                                <textarea class="materialize-textarea" name="description" id="textArea2" placeholder="" rows="3">

                                </textarea>

                            </div>

                        </div>

                        <div>
                            <div class="file-field input-field{{ $errors->has('photo') ? ' has-error' : '' }}">
                                <div class="btn waves-effect waves-light">

                                    <span><i class="fa fa-picture-o"></i> Image</span>
                                    <input type="file" capture="capture" accept="photo/*" name="photo" id="photo" />
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                            <!--<div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">

</br>
                            <label class="col-md-6 control-label" for="title"><i class="material-icons">person_pin</i> Avatar: </label>
                            <input type="file" capture="capture" accept="photo/*" name="photo" id="photo" />

                        </div>-->
</br>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"><i class="material-icons">email</i> Adresse E-Mail </label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"><i class="material-icons">vpn_key</i> Mot de passe</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"><i class="material-icons">vpn_key</i>  Confirmez votre Mot de passe</label>

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
                                    <i class="fa fa-btn fa-user"></i> Enregistrer
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
