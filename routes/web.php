<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingsController;
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


Route::get('/',[AppController::class,'index'])->name('app.index');
Route::middleware('auth')->group(function(){
    Route::get('/my-preference',[UserController::class,'index'])->name('users.index');
    Route::get('/interest-page', [InterestController::class, 'index'])->name('users.interest');
    Route::put('/interests', [InterestController::class, 'update'])->name('interests.update');

    Route::get('/interests-edit', [UserController::class, 'editInterest'])->name('interests.edit');
    Route::put('/interests-updated', [UserController::class, 'updateInterest'])->name('interests.updateUser');

});


Route::middleware(['auth','auth.admin'])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});
Route::get('/my-profile',[ProfileController::class,'userProfile'])->name('dashboard.profile');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/security-profile',[ProfileController::class,'profileSecurity'])->name('dashboard.security');
Route::post('/update-password',[ProfileController::class,'updatePassword'])->name('dashboard.updatePassword');
Route::delete('/delete-account/{user}',[ProfileController::class,'deleteAccount'])->name('delete.account');
Route::put('/update-privacy', [ProfileController::class,'updatePrivacy'])->name('update.privacy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/listings',[ListingsController::class,'index'])->name('app.listings');
