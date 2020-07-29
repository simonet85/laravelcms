@extends('layouts.app')

@section('content')
<div class="panel panel-default">

    <div class="panel panel-heading text-center">
        Etiquette
    </div>

    <div class="panel-body ">
        <table class="table table-hover table-responsive">
            <thead>
                <th>Etiquette</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>
            <tbody>
            @if ( $tags->count() > 0 )

                @foreach ($tags as $tag)

                <tr>
                    <td>{{$tag->tag}}</td>

                    <td><a href="{{ route('tags.edit',['id'=>$tag->id]) }}" class="btn btn-xs btn-info"> <span class="glyphicon glyphicon-pencil" onclick="return confirm('Do you want to Edit')">Modifier</span></a></td>

                    <td><a href="{{ route('tags.delete',['id'=>$tag->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Do you want to delete')"> <span class="glyphicon glyphicon-trash">Supprimer</span></a></td>
                </tr>
            
                @endforeach 

            @else

                <tr>
                    <th colspan="5" class="text-center">PAS DE ETIQUETTES</th>
                </tr>

            @endif
            
            
            
            </tbody>
        </table>
    </div>
</div>

@endsection