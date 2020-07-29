@extends('layouts.app')

@section('content')
<div class="panel panel-default">

        <div class="panel panel-heading text-center">
            Article mis à la poubelle
        </div>
    
<div class="panel-body ">
    <table class="table table-hover table-responsive">
        <thead>
            <th>Image </th>
            <th>Titre</th>
            {{-- <th>Edit</th> --}}
            <th>Restaurer</th>
            <th>Supprimer</th>
        </thead>
        <tbody>


        @if( $posts->count() > 0 )


            @foreach ($posts as $post)
                <tr>
                <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" class="img-responsive img-thumbnail" width="50px" height="50px"></td>
                <td>{{$post->title}}</td>
                {{-- <td>
                        <a href=" {{ route('posts.edit',['id'=>$post->id]) }} " class="btn btn-info btn-xs" onclick='return confirm("Do You really want to Edit ?")'>
                            <span class="glyphicon glyphicon-pencil"></span>
                            Edit
                        </a>
                    </td> --}}
                    <td>
                        <a href=" {{route('posts.restore', ['id'=>$post->id])}} " class="btn btn-success btn-xs" onclick='return confirm("Do You really want to Restore ?")'>
                            <span class="glyphicon glyphicon-trash"></span>Restaurer
                            {{-- <i class="fa fa-trash" aria-hidden="true"></i>Trash --}}
                        </a>
                    </td>
                    <td>
                        <a href=" {{route('posts.kill', ['id'=>$post->id])}} " class="btn btn-danger btn-xs" onclick='return confirm("Do You really want to Delete ?")'>
                            <span class="glyphicon glyphicon-trash"></span>Supprimer
                            {{-- <i class="fa fa-trash" aria-hidden="true"></i>Trash --}}
                        </a>
                    </td>
                </tr>
            
            @endforeach
        
        @else

                <tr>
                    <th colspan="5" class="text-center">PAS DE POSTES SUPPRIMER</th>
                </tr>
        
        @endif

        
        
        </tbody>
    </table>
</div>
</div>
@endsection