<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


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


Route::middleware(['auth:sanctum', 'verified'])->group( function () {
      Route::get('/dashboard', [EmployeeController::class, 'create' ])->name('dashboard');    

});

Route::middleware(['auth:sanctum', 'verified'])->group( function () {
      Route::get('tasks', [EmployeeController::class, 'show' ])->name('tasks');    

});
// Route::middleware(['auth:sanctum', 'verified'])->get('/tasks', function () {
//     return view('tasks');
// })->name('tasks');

// Route::middleware(['auth:sanctum'])->group(function () {
//     Route::get('/wishlist', [EmployeeController::class, 'create' ])->name('components.wishlist');    
   
//    });
