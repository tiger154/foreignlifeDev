<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'FrontController@index');

Route::resource('posts','PostsController');

Route::get('/db', function () {
    // insert check
    //DB::insert('insert into users (id, name, email, password) values (?, ?, ?, ?)', array(1, 'Dayle', 'demoprogrammer@gmail.com', 'somepass'));
    // select test
    $users = DB::table('users')->get();
    foreach ($users as $user)
    {
        print_r($user);
    }
    exit;
    return view('welcome');
});
