<?php

use App\Http\Controllers\Admins\AdminsController;
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\Back\BackHomeController;
use App\Http\Controllers\Roles\RolesController;
use App\Http\Controllers\Front\FrontHomeController;
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

// front design
Route::prefix('front')->name('front.')->group(function () {
    Route::get('/', FrontHomeController::class)->middleware(['auth', 'verified'])->name('index');

});

require __DIR__ . '/auth.php';


// ///////////////////////////////////////////
// back design
Route::prefix('back')->name('back.')->group(function () {
    Route::get('/', BackHomeController::class)->middleware(['admin'])->name('index');
    // middleware('admin')->
    // ---------------------------------------------------Role
    Route::controller(RolesController::class)->group(function(){
        Route::resource('roles',RolesController::class);
    });
// ---------------------------------------------------------------------Admins
Route::controller(AdminsController::class)->group(function(){
    Route::resource('admins',AdminsController::class);
});
// ---------------------------------------------------------------------Users
Route::controller(UserController::class)->group(function(){
    Route::resource('users', UserController::class);
});
    require __DIR__ . '/adminauth.php';
});


Route::get('/', function () {
    return view('welcome');
});