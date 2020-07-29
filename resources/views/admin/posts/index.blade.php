@extends('layouts.app')

@section('content')
<div class="panel panel-default">

        <div class="panel panel-heading text-center">
            Article
        </div>
    
<div class="panel-body ">
    <table class="table table-hover table-responsive">
        <thead>
            <th>Image </th>
            <th>Titre</th>
            <th>Modifier</th>
            <th>Poubelle</th>
        </thead>
        <tbody>
        @if ($posts->count() > 0)

            @foreach ($posts as $post)
            <tr>
            <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" class="img-responsive img-thumbnail" width="50px" height="50px"></td>
            <td>{{$post->title}}</td>
            <td>
                    <a href=" {{ route('posts.edit',['id'=>$post->id]) }} " class="btn btn-info btn-xs" onclick='return confirm("Tu veux vraiment modifier ?")'>
                        <span class="glyphicon glyphicon-pencil"></span>
                        Modifier
                    </a>
                </td>
                <td>
                    <a href=" {{route('posts.delete', ['id'=>$post->id])}} " class="btn btn-danger btn-xs" onclick='return confirm("Tu veux vraiment Supprimer ?")'>
                        <span class="glyphicon glyphicon-trash"></span>
                        Supprimer
                    </a>
                </td>
            </tr>
        
            @endforeach
    
            
        @else

            <tr>
                <th colspan="5" class="text-center">PAS D'ARTICLES PUBLIER</th>
            </tr>
    
        @endif
         
        
        </tbody>
    </table>
</div>
</div>

@endsection