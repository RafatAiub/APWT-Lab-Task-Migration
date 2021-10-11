<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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



Route::view('add','add');
Route::post('add',[ProductController::class,"addData"]);
Route::get('product',[ProductController::class,"showData"]);
Route::get('detail/{id}',[ProductController::class,"showProduct"]);
Route::get('edit/{id}',[ProductController::class,"showEdit"]);
Route::put('update',[ProductController::class,"updateProduct"])->name('update');

