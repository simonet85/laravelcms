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
            Créer une nouvelle étiquette
        </div>
        <div class="panel-body">

            <form action="{{ route('tags.update', ['id'=>$tags->id]) }}" method="post" >

            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="title">Nom</label>
                <input type="text" name="tag" value="{{$tags->tag}}" class="form-control">
            </div>


            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Mis à Jour</button>
                </div>
            </div>

            </form>
        </div>
    </div>
@endsection