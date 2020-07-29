@extends('layouts.app')

@section('content')

   
        
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-lg-3">  
                        <div class="panel panel-info">
                                <div class="panel-heading text-center">
                                    Articles
                                </div>
                            
                            <div class="panel-body">
                               <h4 class="text-center">{{$post_count}}</h4>
                            </div>
                
                        </div> 
                    </div>

                <div class="col-lg-3">  
                    <div class="panel panel-success">
                            <div class="panel-heading text-center">
                                Mis à la poubelle
                            </div>
                        
                        <div class="panel-body">
                            <h4 class="text-center">{{$trashed_count}}</h4>
                        </div>
               
                    </div> 
                </div>

                <div class="col-lg-3">  
                    <div class="panel panel-warning">
                            <div class="panel-heading text-center">
                                UTILISATEURS
                            </div>
                        
                        <div class="panel-body">
                            <h4 class="text-center">{{$users_count}}</h4>
                        </div>
               
                    </div> 
                </div>

                <div class="col-lg-3">  
                        <div class="panel panel-danger">
                                <div class="panel-heading text-center">
                                    CATEGORIES
                                </div>
                            
                            <div class="panel-body">
                                <h4 class="text-center">{{$categories_count}}</h4>
                            </div>
               
                    </div> 
                </div>

              
                
            </div>
        
 

@endsection
