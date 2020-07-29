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
            Modifier les paramètres du blog
        </div>
        <div class="panel-body">

            <form action="{{ route('settings.update') }}" method="post" >
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="title">Nom du Site </label>
            <input type="text" name="site_name" value=" {{$settings->site_name}} " class="form-control">
            </div>

            <div class="form-group">
                <label for="title">Adresse</label>
                <input type="text" name="address" class="form-control" value="{{$settings->address}} ">
            </div>

            <div class="form-group">
                <label for="title">Contact téléphonique</label>
                <input type="text" name="contact_number" class="form-control" value="{{$settings->contact_number}} ">
            </div>

            <div class="form-group">
                <label for="title">Email </label>
                <input type="email" name="contact_email" class="form-control" value="{{$settings->contact_email}} ">
            </div>


            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Mise à jour des paramètres du site</button>
                </div>
            </div>

            </form>
        </div>
    </div>
@endsection