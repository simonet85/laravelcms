<?php
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/subscribe', 'NewsletterController@create');

Route::post('/subscribe', 'NewsletterController@store');

Route::get('test', function(){
    return App\Profile::find(1)->user;
});

Route::get('/', [

    'uses'=>'FrontEndController@index',

    'as'=>'index'

]);

Route::get('/post/{slug}', [

    'uses'=>'FrontEndController@singlePost',

    'as'=>'post.single'

]);

Route::get('/template/category/{id}', [

    'uses'=>'FrontEndController@category',

    'as'=>'template.category'

]);

Route::get('/template/tag/{id}', [

    'uses'=>'FrontEndController@tag',

    'as'=>'template.tag'

]);

Route::get('/template/results', function(){

    $posts = \App\Post::where('title', 'like', '%'.request('query').'%')->get();

    return view('../template/results')->with('posts',$posts)

                            ->with('title','Search result: '.request( 'query' ))

                              ->with('settings', \App\Setting::first())

                                ->with('categories', \App\Category::take(4)->get())

                                  ->with('query', request('query'));
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {

    Route::get('/dashboard', [

        'uses'=>'HomeController@index',

        'as'=>'home'
    ]);

    Route::get('/posts/create',[

        'uses'=>'PostsController@create',

        'as'=>'posts.create'
    ]);
    
    
    Route::post('/posts/store',[

        'uses'=>'PostsController@store',

        'as'=>'posts.store'
    ]); 

    Route::get('/categories/create',[

        'uses'=>'CategoriesController@create',

        'as'=>'categories.create'
    ]); 

    Route::get('/categories/edit/{id}',[

        'uses'=>'CategoriesController@edit',

        'as'=>'categories.edit'
    ]);

    Route::get('/categories/delete/{id}',[

        'uses'=>'CategoriesController@destroy',

        'as'=>'categories.delete'
    ]);

    Route::get('/categories',[

        'uses'=>'CategoriesController@index',

        'as'=>'categories'
    ]);

    Route::get('/posts',[

        'uses'=>'PostsController@index',

        'as'=>'posts'
    ]);

    Route::get('/posts/trashed',[

        'uses'=>'PostsController@trashed',

        'as'=>'posts.trashed'
    ]);

    Route::get('/posts/kill/{id}',[

        'uses'=>'PostsController@kill',

        'as'=>'posts.kill'
    ]);

    Route::get('/posts/restore/{id}',[

        'uses'=>'PostsController@restore',
        
        'as'=>'posts.restore'
    ]);

    Route::get('/posts/edit/{id}',[
        'uses'=>'PostsController@edit',
        'as'=>'posts.edit'
    ]);

    Route::get('/posts/delete/{id}',[
        'uses'=>'PostsController@destroy',
        'as'=>'posts.delete'
    ]);

    Route::get('/tags',[
        'uses'=>'TagsController@index',
        'as'=>'tags.index'
    ]);

    Route::get('/tags/create',[
        'uses'=>'TagsController@create',
        'as'=>'tags.create'
    ]);


    Route::get('/tags/edit/{id}',[
        'uses'=>'TagsController@edit',
        'as'=>'tags.edit'
    ]);

    Route::get('/tags/delete/{id}',[
        'uses'=>'TagsController@destroy',
        'as'=>'tags.delete'
    ]);

    Route::post('/tags/update/{id}',[
        'uses'=>'TagsController@update',
        'as'=>'tags.update'
    ]); 

    Route::post('/tags/store',[
        'uses'=>'TagsController@store',
        'as'=>'tags.store'
    ]); 


    Route::post('/posts/update/{id}',[
        'uses'=>'PostsController@update',
        'as'=>'posts.update'
    ]); 


   
    Route::post('/categories/store',[
        'uses'=>'CategoriesController@store',
        'as'=>'categories.store'
    ]); 

    Route::post('/categories/update/{id}',[
        'uses'=>'CategoriesController@update',
        'as'=>'categories.update'
    ]); 


    Route::get('/users',[
        'uses'=>'UsersController@index',
        'as'=>'users'
    ]);

    Route::get('users/create', [
        'uses' => 'UsersController@create',
        'as' => 'users.create'
    ]);

    Route::post('/users/store', [

        'uses' => 'UsersController@store',
        'as'=> 'users.store'

    ]);

    
    Route::get('users/admin/{id}', [
        'uses' => 'UsersController@admin',
        'as' => 'users.admin'
    ]);

    Route::get('users/not-admin/{id}', [
        'uses' => 'UsersController@not_admin',
        'as' => 'users.not.admin'
    ]);

    Route::get('users/profile', [

        'uses'=>'ProfilesController@index',
        'as'=>'users.profile'

    ]);


    Route::get('users/delete/{id}', [

        'uses'=>'ProfilesController@destroy',
        'as'=>'users.delete'

    ]);


    Route::post('users/profile/update', [

        'uses'=>'ProfilesController@update',
        'as'=>'users.profile.update'

    ]);

    Route::get('/settings',[
        'uses'=>'SettingsController@index',
        'as'=>'settings'
    ]);


    Route::post('/settings/update',[
        'uses'=>'SettingsController@update',
        'as'=>'settings.update'
    ]);


});


