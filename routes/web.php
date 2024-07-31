<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
Aquí es donde puede registrar rutas web para su aplicación. 
*/




/*Ruta para acceder al login*/
Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();
/*Ruta para acceder al home cuando se loggea un usuario*/
Route::get('/home', [App\Http\Controllers\CatalogProductController::class, 'index'])->name('home');


/*Ruta Resource para el crud de productos*/
use App\Http\Controllers\CatalogProductController;
 
Route::resource('/products', CatalogProductController::class);

