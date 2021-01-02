<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\EngineeringController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DailyController;
use App\Http\Controllers\Three_DController;
use App\Http\Controllers\TodoController;

use App\Http\Controllers\RegisterController;
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

//Route::get('/', function () {
//    return view('welcome');
//});




Route::get('/sales',[SalesController::class, 'getAllSales']);
Route::get('/marketing',[MarketingController::class, 'index']);
Route::get('/engineering',[EngineeringController::class, 'index']);
Route::get('/three_d',[Three_DController::class, 'index']);

Route::get('/report',[DailyController::class, 'index']);
Route::post('/todo',[DailyController::class, 'create'])->name('todo');
Route::post('/company',[DailyController::class, 'company'])->name('company');

Route::post('/check',['as' => 'check', 'uses' => 'App\Http\Controllers\LoginController@check']);

Route::get('/profile',[ProfileController::class, 'index'])->middleware('isLogged');
Route::post('/update/{id}',[ProfileController::class, 'update'])->name('update');


Route::get('/register',[RegisterController::class, 'index'])->middleware('AlreadyLoggedIn');
Route::post('/create',[RegisterController::class, 'create'])->name('create');


Route::get('/login',[LoginController::class, 'logins'])->name('login');



Route::get('/home',[HomeController::class, 'index']);
Route::get('/logout',[LoginController::class, 'doLogout']);

Route::get('/todo_list',[\App\Http\Controllers\TodoController::class, 'getTodo']);
Route::post('/complete',[TodoController::class, 'complete'])->name('complete');
