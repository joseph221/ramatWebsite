<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventController;

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

Route::get('/',[MainController::class,'home'])->name('home');
Route::get('/about',[MainController::class,'about'])->name('about');
Route::get('/contact',[MainController::class,'contactUs'])->name('contact');
Route::get('/gallary',[MainController::class,'gallary'])->name('gallary');
Route::get('/news',[MainController::class,'news'])->name('news');
Route::get('/events',[MainController::class,'events'])->name('events');
Route::post('/sendMail',[MainController::class,'sendMail'])->name('sendMail');
Route::get('/waste',[MainController::class,'waste_manage'])->name('waste');
Route::get('/women_empower',[MainController::class,'women_empowerment'])->name('women_empower');
Route::get('/young_generation',[MainController::class,'young_generation'])->name('young_generation');
Route::get('/healthy_ev_school',[MainController::class,'healthy_ev_school'])->name('healthy_ev_school');

Auth::routes();
Route::get('dashboard',[AdminController::class, 'dash'])->name('dashboard');
Route::resource('adminnews', NewsController::class);
Route::resource('adminevent', EventController::class);
