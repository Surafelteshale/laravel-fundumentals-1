<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [AboutController::class, 'index'])->name('about');

Route::get('contact', [ContactController::class, 'index']);

Route::get('contact/{id}', function($id){
    return $id;
})->name(('edit-contact'));

Route::get('/home', [HomeController::class, 'index']);

Route::resource('blog', BlogController::class);

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login', [LoginController::class, 'handleLogin'])->name('login.submit');

/** Route Grouping **/
// Route::group(['prefix' => 'customer'], function(){
//     Route::get('/', function(){
//         return "<h1>Customer List</h1>";
//     });

//     Route::get('/create', function(){
//         return "<h1>Customer Create</h1>";
//     });

//     Route::get('/show', function(){
//         return "<h1>Customer Show</h1>";
//     });
// });


// Route Methods

/**
 * Get - Request a resource
 * Post - Create a new resource
 * Put - Update a resource
 * Patch - Modify a resource
 * Delete - Delete a resource
 */


 // Fallback Route

Route::fallback(function(){
    return "Route Not Exist";
});
