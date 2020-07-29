@extends('layouts.app')

@section('content')

@include('admin.inc.errors')

    <div class="panel panel-default">
       
        <div class="panel-heading">
            Catégorie Mis à jour :{{$category->name}}
        </div>
        <div class="panel-body">

            <form action="{{ route('categories.update',['id'=>$category->id]) }}" method="post" >
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="title">Nom</label>
                <input type="text" name="name" value="{{$category->name}}" class="form-control">
            </div>

            

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Mis à jour </button>
                </div>
            </div>

            </form>
        </div>
    </div>
@endsection