<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
// Route::get('servicios', 'App\Http\Controllers\Servicios2Controller@index')->name('servicios');
// Route::get('servicios/crear', 'App\Http\Controllers\Servicios2Controller@create')->name('servicios.create');
// Route::get('servicios/{id}/editar', 'App\Http\Controllers\Servicios2Controller@edit')->name('servicios.edit');
// Route::patch('servicios/{id}', 'App\Http\Controllers\Servicios2Controller@update')->name('servicios.update');
// Route::post('servicios', 'App\Http\Controllers\Servicios2Controller@store')->name('servicios.store');
// Route::get('servicios/{id}', 'App\Http\Controllers\Servicios2Controller@show')->name('servicios.show');
// Route::delete('servicios/{servicio}', 'App\Http\Controllers\Servicios2Controller@destroy')->name('servicios.destroy');
// Route::resource('servicios','App\Http\Controllers\Servicios2Controller')->names('servicios')->middleware('auth');
//ruta del controlador servicios usado
Route::resource('servicios','App\Http\Controllers\Servicios2Controller')->names('servicios');
//Route::get('servicios', 'App\Http\Controllers\Servicios2Controller@index')->name('servicios');
Route::view('contacto', 'contacto')->name('contacto');
Route::post('contacto', 'App\Http\Controllers\ContactoController@store');

Auth::routes(['register'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
