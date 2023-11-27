<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('vista1');
}); */
Route::get('/', function () {
    return view('auth.login');
});

/* Route::get('/TEXTO', function () {
    return'prueba';
});

Route::get('/arre', function () {
    $arreglo =[
        'ID'=>'1',
        'descripcion'=>'proto1'
    ];
    return $arreglo;
});

Route::get('/nombre/{nombre}', function ($nombre) {
    return 'el nombre es:'.$nombre;
}); */


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});
