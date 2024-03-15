<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/user/index', function(){
    return view('user.index');
});
// Route::get('/user/dashboard', function () {
//     return view('dashboard1');
// })->name('user.dashboard');

Route::view('/user/dashboard1', 'user.dashboard1')->middleware('checklogin');
Route::view('/user/dashboard2', 'user.dashboard2')->middleware('checklogin');

Route::get('/user/logout', [Logincontroller::class, 'logout']);

Route::view('/user/login', 'user.loginform')->name('login');
// Route::get('/', [Usercontroller::class,'show']);
Route::post('/user/add', [Usercontroller::class, 'add'])->name('user.add');
Route::post('/user/form', [Logincontroller::class, 'login'])->name('user.form');



Route::get('/doctors',[HomeController::class, 'index']);



