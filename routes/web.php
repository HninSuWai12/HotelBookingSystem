<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\User\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'user-access:user' , 'verified'])->group(function () {
  
    Route::get('/home', [UserController::class, 'index'])->name('home');
    Route::get('detail/{id}',[UserController::class, 'detail'])->name('detail');
    Route::get('rooms',[UserController::class,'search'])->name('search');

    //Booking
    Route::get('booking',[BookingController::class,'book'])->name('bookView');
    Route::post('booking',[BookingController::class,'booking'])->name('booking');


});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin' ])->group(function () {
  
    Route::group(['prefix'=>'admin'],function(){
        Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');
        //Room
    Route::get('room',[RoomController::class,'room'])->name('room');
    Route::get('add',[RoomController::class,'addRoom'])->name('admin.addRoom');
    Route::post('upload',[RoomController::class,'uploadData'])->name('admin.upload');
    Route::get('view',[RoomController::class,'view'])->name('admin.view');
    Route::get('edit/{id}',[RoomController::class,'edit'])->name('admin.edit');
    Route::post('update/{id}',[RoomController::class,'update'])->name('admin.update');
    Route::get('delete/{id}',[RoomController::class,'delete'])->name('admin.delete');
    Route::get('userBooked',[RoomController::class,'userBooked'])->name('userBooked');

    });
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});