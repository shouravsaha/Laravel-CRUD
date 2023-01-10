<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\CustomerController;

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
Route::get('/navbar', [CustomerController::class, 'navigation']);

Route::get('/index', [CustomerController::class, 'customer_table'])->name('index');
Route::get('/add', [CustomerController::class, 'add_customer']);
Route::post('/dataprocess', [CustomerController::class, 'dataprocess']);
Route::get('showdata', [CustomerController::class, 'showData']);
Route::get('/edit/{id}', [CustomerController::class, 'editcustomer']);
Route::post('/update/{id}', [CustomerController::class, 'updatecustomer']);
Route::get('/delete/{id}', [CustomerController::class, 'deletecustomer']);
