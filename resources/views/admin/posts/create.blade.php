@extends('layouts.app')

@section('content')

@include('admin.inc.errors')

    <div class="panel panel-default">
       
        <div class="panel-heading">
            Créer un Nouvel article
        </div>
        <div class="panel-body">
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="featured">Avatar</label>
                <input type="file" name="featured" class="form-control">
            </div>
 
            <div class="form-group">
                <label for="categories">Choisir une catégorie</label>
                <select  class="form-control" name="category_id" id="">

                    @foreach ($categories as $category)

                    <option selected value="{{$category->id}}"> {{$category->name}} </option>
                    
                    @endforeach

                </select>
            </div>

            <div class="form-group">

                <label for="tags">Sélectionner les étiquettes</label>
                 
                @foreach ($tags as $tag)
                <div class="checkbox">
                        <label for="">
                            <input type="checkbox" name="tags[]" value="{{$tag->id}}" id="">
                            {{$tag->tag}}
                        </label>
                    </div>
                @endforeach

            </div>

            <div class="form-group">
                <label for="content">Contenu </label>
                <textarea name="content" id="summernote" cols="10" rows="10" class="form-control"></textarea>
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

@section('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>

@endsection