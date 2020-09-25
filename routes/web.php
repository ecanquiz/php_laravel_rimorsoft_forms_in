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
    return view('formulario-get');
});

/*Route::get('form-get', function () {
    return 'Proceso de formulario';
});*/

/*Route::get('form-get', function () {
    return 'Proceso de formulario';
})->name('form-get');*/

/*Route::get('form-get', function (Illuminate\Http\Request $request) {
    return $request->input('search');
})->name('form-get');*/

/*use Illuminate\Http\Request;

Route::get('form-get', function (Request $request) {
    return $request->input('search');
})->name('form-get');*/

Route::get('form-get', function () {
    return request('search');
})->name('form-get');

