<?php
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();


Route::get('/home', 'HomeController@index');
Route::get('/password/define/{temp}/{email}', 'Auth\ResetPasswordController@showFormDefine');
Route::post('/password/define', 'Auth\ResetPasswordController@definePassword');

Route::group(['middleware' => 'auth'],function(){
  Route::get('empleados',['as' => 'empleados','uses' => 'EmpleadoController@index']);
  Route::get('empleados/create',['as' => 'empleados.create','uses' => 'EmpleadoController@create']);
  Route::get('empleados/{empleado}/delete',['as' => 'empleados.delete','uses' => 'EmpleadoController@delete']);
  Route::get('empleados/{empleado}/edit',['as' => 'empleados.edit','uses' => 'EmpleadoController@edit']);
  Route::post('empleados',['as' => 'empleados.store','uses' => 'EmpleadoController@store']);
  Route::patch('empleados/{empleado}',['as' => 'empleados.update','uses' => 'EmpleadoController@update']);
  Route::delete('empleados/{empleado}',['as' => 'empleados.destroy','uses' => 'EmpleadoController@destroy']);


  Route::get('domicilios',['as' => 'domicilios','uses' => 'DomicilioController@index']);
  Route::get('domicilios/create',['as' => 'domicilios.create','uses' => 'DomicilioController@create']);
  Route::get('domicilios/{domicilio}/delete',['as' => 'domicilios.delete','uses' => 'DomicilioController@delete']);
  Route::get('domicilios/{domicilio}/edit',['as' => 'domicilios.edit','uses' => 'DomicilioController@edit']);
  Route::post('domicilios',['as' => 'domicilios.store','uses' => 'DomicilioController@store']);
  Route::patch('domicilios/{domicilio}',['as' => 'domicilios.update','uses' => 'DomicilioController@update']);
  Route::delete('domicilios/{domicilio}',['as' => 'domicilios.destroy','uses' => 'DomicilioController@destroy']);
});

Route::get('/success',function(\Illuminate\Http\Request $request){

    Auth::loginUsingId($request->user()->id);
    $request->getSession()->set('token',$request->token);
    return redirect()->to('home');

})->middleware('jwt.auth');
