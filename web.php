<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SmsController;
use App\Http\Middleware\UserStatus;
use App\Http\Middleware\Admin;





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


      Route::get('/dashboard', [EmployeeController::class, 'create' ])->name('employeemodule.dashboard');    
      Route::get('tasks', [EmployeeController::class, 'show' ])->name('employeemodule.tasks');    



// Route::middleware(['auth:sanctum', 'verified'])->group( function () {
//       Route::get('tasks', [EmployeeController::class, 'show' ])->name('employeemodule.tasks');    

// });

Route::get('admindashboard', function () {
	return view('adminmodule.dashboard');
})->name('adminmodule.dashboard')->middleware(['verified']);
Route::post('index',[AdminController::class,'index']);
Route::get('list',[AdminController::class,'list'])->name('adminmodule.list');
Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');
Route::get('task',[AdminController::class,'task'])->name('adminmodule.task');
Route::post('gettask',[AdminController::class,'gettask'])->name('gettask');
// Route::get('tasks',[EmployeeController::class,'status'])->name('employeemodule.tasks');
 Route::post('getstatus',[EmployeeController::class,'getstatus'])->name('getstatus');
 Route::get('/contact', [EmailController::class,'index'])->name('contact');
 Route::post('/sendemail/send', [EmailController::class,'send']);
 Route::get('/sms', [SmsController::class,'index'])->name('sms');
Route::post('/sms/send', [SmsController::class,'sendmessage']);
