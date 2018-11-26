<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
     return view('welcome');
});

//

//Route::resource('posts', 'PostsController');

Route::get('contact', 'PostsController@contact');

Route::get('posts/{id}/{username}', 'PostsController@show_post');

/*
|--------------------------------------------------------------------------
| INSERT
|--------------------------------------------------------------------------
|
*/

Route::get('/insert', function(){

    DB::insert('insert into posts(content, body) values(?,?)',['PHP with Laravel','Laravel']);

});

/*
|--------------------------------------------------------------------------
| READ
|--------------------------------------------------------------------------
|
*/

Route::get('/read', function(){

    $results = DB::select('select * from posts where id=?', [1]);

    return var_dump($results);


});


Route::get('/update', function(){

    $update = DB::update('update posts set content="updated" where id=?', [1]);

    return $update;


});