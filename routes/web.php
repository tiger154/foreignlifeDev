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


// For locale set
Route::group([
        'prefix' => LaravelLocalization::setLocale()
      , 'domain' => '{region}.foreignlife.com'
      , 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect','localize']
    ]
    , function () {
    Route::get('/', 'FrontController@index');

    /*
    Route::get('/', function(){
        //#################### need to go to middle ware
        $regions = app('laravelregions');
        $supportedRegions = $regions->getSupportedRegions();
        // #1. check geoLocation iso code by IP
        $geo = $regions->getGeoLocation();
        // #2. Find if there is matched config value.
        if (array_has($supportedRegions, $geo->iso_code)) {
            $region = config('region.supportedRegions.'.$geo->iso_code);
            dump($region['sub_domain']);
            // redirect to subdomain
        }
        exit;
    });
    */
    Route::match(['get','post'],'/question/get','QuestionController@get');
    Route::get('/question/region', function() {
        $title = 'Region&Language Setting';
        return view('region.view', compact('title'));
    });
    Route::resource('question','QuestionController');
});







/****************************************************
 * Boots trap route
 ***************************************************/
Route::get('/bootstrap/starter', function () { return view('bootstrap/starter'); });
Route::get('/bootstrap/jumbotron', function () { return view('bootstrap/jumbotron'); });


/**************************************************
 * Test route
 ***************************************************/
/*Route::get('/', 'FrontController@index');*/
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
