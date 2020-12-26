<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;



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
      Route::get('/dashboard', [EmployeeController::class, 'create' ])->name('employeemodule.dashboard');    

});

Route::middleware(['auth:sanctum', 'verified'])->group( function () {
      Route::get('tasks', [EmployeeController::class, 'show' ])->name('employeemodule.tasks');    

});
// Route::middleware(['auth:sanctum', 'verified'])->get('/tasks', function () {
//     return view('tasks');
// })->name('tasks');

// Route::middleware(['auth:sanctum'])->group(function () {
//     Route::get('/wishlist', [EmployeeController::class, 'create' ])->name('components.wishlist');    
   
//    });
Route::middleware(['auth:sanctum'])->group(function () {
Route::get('admindashboard', function () {
	return view('adminmodule.dashboard');
})->name('adminmodule.dashboard');
Route::post('index',[AdminController::class,'index']);
Route::get('list',[AdminController::class,'list'])->name('adminmodule.list');
Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');
Route::get('task',[AdminController::class,'task'])->name('adminmodule.task');
Route::post('gettask',[AdminController::class,'gettask'])->name('gettask');
});
