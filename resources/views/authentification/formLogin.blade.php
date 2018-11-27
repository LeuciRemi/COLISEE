<<<<<<< HEAD
@extends('layouts.master')
{!! Form::open(['url' => 'login']) !!}
<div class="col-md-12 well well-md">
    <center><h1>Authentification</h1></center>
    <div class="form-horizontal">    
=======
@extends('Colisee2.Colisee-master.resources.views.layouts.master')
{!! Form::open(['url' => 'login']) !!}
<div class="col-md-12 well well-md">
    <center><h1>Authentification</h1></center>
    <div class="form-horizontal">
>>>>>>> Modification Estelle
        <div class="form-group">
            <label class="col-md-3 control-label">Identifiant : </label>
            <div class="col-md-6  col-md-3">
                <input type="text" name="login" class="form-control" placeholder="Votre identifiant" required autofocus>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Mot de passe : </label>
            <div class="col-md-6 col-md-3">
                <input type="password" name="pwd" ng-model="pwd" class="form-control" placeholder="Votre mot de passe" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-default btn-primary">Valider</button>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
<<<<<<< HEAD
            @include('error')
        </div>
    </div>
</div>


=======
            @include('layouts.error')
        </div>
    </div>
</div>
>>>>>>> Modification Estelle
