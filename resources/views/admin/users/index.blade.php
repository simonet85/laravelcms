@extends('layouts.app')

@section('content')
<div class="panel panel-default">

        <div class="panel panel-heading text-center">
           Utilisateurs
        </div>
    
<div class="panel-body ">
    <table class="table table-hover table-responsive">
        <thead>
            <th>Image </th>
            <th>Nom</th>
            <th>Autorisations</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
        @if ($users->count() > 0)

            @foreach ($users as $user)
           <tr>
               

                <td><img src="{{asset($user->profile->avatar)}}" alt="{{ $user->name }}" class="img-responsive img-thumbnail" style="border-radius:50%" width="50px" height="50px"></td>

                <td>{{$user->name}}</td>

                <td>
                    @if($user->admin)

                    <a href="{{ route('users.not.admin', ['id'=>$user->id]) }}" class="btn btn-xs btn-danger">Supprimer les autorisations </a>
                    @else

                <a href="{{ route('users.admin', ['id'=>$user->id]) }}" class="btn btn-xs btn-success">Rendre Admin</a>
                    @endif
                </td>

                <td>
                    @if ( Auth::id() !== $user->id )

                    <a href="{{ route('users.delete', ['id'=>$user->id]) }}" class="btn btn-xs btn-warning">Supprimer</a>
                        
                    @endif
                  
                </td>

            </tr> 
        
            @endforeach
    
            
        @else

            <tr>
                <th colspan="5" class="text-center">PAS D'UTILISATEURS</th>
            </tr>
    
        @endif
         
        
        </tbody>
    </table>
</div>
</div>

@endsection