<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
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

Route::get('/', [HomeController::class, "show"]);

Route::get('/nosotros', function(){
    return "HELLO FUCKING WORLD";
});

Route::get('/users/{id}', function ($id) {
    return $id;
});


Route::prefix('/company')->group(function() {
    Route::get('/nosotros', function () {
        return "company - nosotros";
    });
     Route::get('/contacto', function () {
        return "company - contacto";
    });
});


Route::prefix('/posts')->group(function() {
    Route::get('/create', [PostsController::class, "create"]);
    Route::get('/{id}', [PostsController::class, "show"]);
    Route::post('/', [PostsController::class, "store"]);
    Route::get('/{id}/edit', [PostsController::class, "edit"]);
    Route::patch('/{id}', [PostsController::class, "update"]);
    Route::delete('/{id}', [PostsController::class, "destroy"]);
});