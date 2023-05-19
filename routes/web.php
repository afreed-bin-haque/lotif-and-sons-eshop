<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Backend\LoginAccessController;
use App\Http\Controllers\Backend\BackendPageController;
use App\Http\Controllers\Visitor\VisitorController;
use App\Http\Middleware\Backend\Auth;

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

Route::get('/',[PageController::class,'Index'])->name('welcome');
Route::get('/cart',[PageController::class,'Index'])->name('cart');
Route::prefix('log')->group(function(){
    Route::get('/in',[LoginAccessController::class,'ViewLoginPage'])->name('log.in');
    Route::post('/in/verify',[LoginAccessController::class,'VerifyUser'])->name('log.in_verify');
});
Route::get('/register',[LoginAccessController::class,'Register'])->name('register.here');
Route::post('/store/user/registration',[LoginAccessController::class,'StoreUser'])->name('store.user_registration');
Route::prefix('visitor')->group(function(){
    Route::get('/upload/list',[VisitorController::class,'ViewUploadList'])->name('upload.your_list');
    Route::post('submit/upload/list',[VisitorController::class,'StoreGroceryList'])->name('submit.your_list');
});

Route::middleware([auth::class])->group(function () {
    Route::prefix('dashboard')->group(function(){
        Route::get('/view',[BackendPageController::class,'dashboard'])->name('dashboard');
    });
});


/* Page Helpers */
Route::prefix('dashboard')->group(function(){
    Route::get('/get/main',[BackendPageController::class,'MainGridLoader'])->name('fetch.main-div');
});
