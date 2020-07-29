@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
    <ul class="list-group">
        @foreach ($errors->all() as $error)
            <li class="list-group-item text-danger">
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif

    <div class="panel panel-default">
       
        <div class="panel-heading">
            MODIFIER UTILISATEURS
        </div>
        <div class="panel-body">

            <form action="{{ route('users.profile.update') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="title">Nom d'utilisateur</label>
                <input type="text" name="name" class="form-control" value="{{$user->name}}">
            </div>

            <div class="form-group">
                <label for="title">E-mail</label>
                <input type="email" name="email" class="form-control" value="{{$user->email}}">
            </div>

            <div class="form-group">
                <label for="title">Nouveau mot de passe</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="title"> Télécharger un nouvel avatar</label>
                <input type="file" name="avatar" class="form-control">
            </div>

            <div class="form-group">
                <label for="title">Profil FaceBook</label>
                <input type="text" name="facebook" class="form-control" value="{{$user->profile->facebook}}">
              
            </div>

            <div class="form-group">
                <label for="title">Profil YouTube</label>
                <input type="text" name="youtube" class="form-control"  value="{{$user->profile->youtube}} ">
                
            </div>

            <div class="form-group">
                <label for="title">À propos de vous</label>
                
                  <textarea class="form-control" name="about" id="about" rows="3"></textarea>
        
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Mise à jour du profil</button>
                </div>
            </div>

            </form>
        </div>
    </div>
@endsection