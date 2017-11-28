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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/clients', 'Admin\\ClientsController');
});

Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/barbers', 'Admin\\BarbersController');
});

Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/providers', 'Admin\\ProvidersController');
});

Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/users', 'UserController');
});

Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/roles', 'RoleController');
});

Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/permissions', 'PermissionController');
});

Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/quotes', 'Admin\\QuotesController');
});

Route::get('calendar', function(){
  $events = [];
  $data = App\Quote::all();
  if($data->count()) {
      foreach ($data as $key => $value) {
          $events[] = Calendar::event(
              $value->client_name,
              true,
              new \DateTime($value->start_date),
              new \DateTime($value->end_date.' +1 day'),
              null,
              // Add color and link on event
           [
               'color' => '#ff0000',
               'url' => 'pass here url and any route',
           ]
          );
      }
  }
  $calendar = Calendar::addEvents($events);
  return view('calendar', compact('calendar'));
});
