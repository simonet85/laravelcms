@extends('layouts.app')

@section('content')

@include('admin.inc.errors')

    <div class="panel panel-default">
       
        <div class="panel-heading">
           Modifier L'article: {{ $posts->title}}
        </div>
        <div class="panel-body">
            <form action="{{ route('posts.update', ['id'=>$posts->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$posts->title}}">
            </div>

            <div class="form-group">
                <label for="featured">Image</label>
                <input type="file" name="featured" class="form-control">
            </div>
 
            <div class="form-group">

                <label for="categories">Selectionner la Catégorie</label>

                <select  class="form-control" name="category_id" id="">

                @foreach ($categories as $category)

                    <option value="{{$category->id}}"

                        @if ($posts->category->id == $category->id)
                            
                            selected

                        @endif

                    >   
                      
                    {{$category->name}} 

                    </option>

                @endforeach
                
                </select>

            </div>

            <div class="form-group">

                    <label for="tags">Selectionner l'étiquette</label>
                     
                    @foreach ($tags as $tag)

                    <div class="checkbox">
                            <label for="">
                                <input type="checkbox" name="tags[]" value="{{$tag->id}}" id="" 
                                
                        @foreach ($posts->tags as $t)

                            @if ($tag->id == $t->id)

                                checked

                            @endif
                           
                       @endforeach
                                
                                >

                                {{$tag->tag}}

                            </label>
                        </div>

                    @endforeach
    
                </div>

            <div class="form-group">
                <label for="content">Contenu </label>
                <textarea name="content" id="content" cols="10" rows="10" class="form-control">{{$posts->content}}</textarea>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit"> Enregistrer</button>
                </div>
            </div>

            </form>
        </div>
    </div>
@endsection