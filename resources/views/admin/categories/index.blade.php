@extends('layouts.app')

@section('content')
<div class="panel panel-default">

    <div class="panel panel-heading text-center">
        Categories
    </div>

    <div class="panel-body ">
        <table class="table table-hover table-responsive">
            <thead>
                <th>Nom de Categorie </th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>
            <tbody>
            @if ( $categories->count() > 0 )

                @foreach ($categories as $category)

                <tr>
                    <td>{{$category->name}}</td>

                    <td>
                        <a href="{{ route('categories.edit',['id'=>$category->id]) }}" class="btn btn-xs btn-info"> <span class="glyphicon glyphicon-pencil" onclick="return confirm('Do you want to Edit')">Modifier</span>
                        </a>
                    </td>

                    <td>
                        <a href="{{ route('categories.delete',['id'=>$category->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Do you want to delete')"> <span class="glyphicon glyphicon-trash">Supprimer</span></a>
                    </td>
                </tr>
            
                @endforeach 

            @else

                <tr>
                    <th colspan="5" class="text-center">PAS DE CATEGORIE</th>
                </tr>

            @endif
            
            
            
            </tbody>
        </table>
    </div>
</div>

@endsection