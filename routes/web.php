<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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



Route::get('/test', function (){return view('signup');});
Route::get('/', function () {return view('welcome');})->name('welcome')->middleware('auth');
//Route::get('/home', function () {return view('base');})->name('base');
Auth::routes();
Route::resource('/products', productController::class);
Route::get('/show_products/{id}' ,[productController::class , 'ShowProducts'])->name('showProducts');


Route::get('/products-list', [AdminController::class , 'index'])->name('productsList');
//Route::get('/{page}', [AdminController::class , 'test']);


Route::get('/users-list', [AdminController::class , 'UsersIndex'])->name('usersList');
Route::get('/users-list/{user}/edit', [AdminController::class , 'UserEdit'])->name('userEdit');
Route::put('/users-list/{user}', [AdminController::class , 'UserUpdate'])->name('userUpdate');
Route::delete('/users-list/{user}', [AdminController::class , 'UserDelete'])->name('userDelete');
Route::put('/users-list/{user}/edit', [AdminController::class , 'UserEdit'])->name('userEdit');
//Route::get('/user-orders/{user}', [AdminController::class , 'UserOrder'])->name('userOrder');


Route::get('/category-create' ,[AdminController::class , 'CategoryCreate'])->name('categoryCreate');
Route::post('/category-store' ,[AdminController::class , 'CategoryStore'])->name('categoryStore');


Route::get('/ShowSelectedItems' ,[AdminController::class , 'ShowSelectedItems'])->name('ShowSelectedItems');
Route::get('/clearCart' ,[AdminController::class , 'clearCart'])->name('ClearCart');
Route::get('/checkout' ,[AdminController::class , 'store'])->name('checkout');
Route::get('/ShowOrders' ,[productController::class , 'ShowOrders'])->name('ShowOrders');
Route::get('/ShowUserOrders/{user}' ,[AdminController::class , 'ShowUserOrders'])->name('ShowUserOrders');
Route::get('/ControlOrders' ,[AdminController::class , 'ControlOrders'])->name('ControlOrders');



Route::get('/ShowOrderItems/{order_id}' ,[AdminController::class , 'ShowOrderItems'])->name('ShowOrderItems');

Route::get('/search' ,[productController::class , 'search'])->name('search');


Route::get('/profile' ,[AdminController::class , 'profile'])->name('profile');



Route::post('/test1/product_id' ,[AdminController::class , 'test1'])->name('test1');




