<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\dashboardController;
use Laravel\Socialite\Facades\Socialite;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware'=>'guest'],function(){
    Route::get('/signup', [signupController::class, 'index']);
    Route::post('signup-store',[signupController::class,'authenticatin']);

    Route::get('login', [loginController::class, 'index'])->name('login');
    Route::post('login-Auth',[loginController::class,'authenticatin']);
});
Route::group(['middleware'=>'auth'],function(){
    Route::get('logout',[signupController::class,'logout']);
    Route::get('/home', [dashboardController::class, 'index']);
});
Route::get('facebook-login', [loginController::class, 'facebook'])->name('facebook-login');
Route::get('facebook-callback', [loginController::class, 'callbackfb'])->name('facebook-callback');
Route::get('google-callback', [loginController::class, 'callback'])->name('google-callback');

Route::get('/',[homeController::class,'index']);