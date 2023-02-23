<?php

use App\Http\Controllers\ListController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
    return view('front.welcome');
});

Route::get('/admin/login', function(){
    return view('back.login');
});

Route::post('/admin/login', [LoginController::class, 'login']);

Route::get('/admin', function(){
    return view('back.dashboard');
})->name('admin.dashboard');


// Admin Settings
Route::get('/admin/setting', [ListController::class, 'index'])->name('admin.setting');