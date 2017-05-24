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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Auth::routes();

/*Route::get('/team', 'TeamController@list');
Route::get('/member', 'MemberController@list');*/

Route::group(['prefix' => 'api/examen/'], function () {
    Route::get('teams', ['uses' => 'TeamController@list']);
    Route::get('teams/{team}', ['uses' => 'TeamController@show']);
    Route::post('teams', ['uses' => 'TeamController@store']);
    Route::put('teams/{team}', ['uses' => 'TeamController@update']);
    Route::delete('teams/{team}', ['uses' => 'TeamController@destroy']);
});
