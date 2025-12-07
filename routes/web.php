<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/products', [UserController::class, 'product'])->name('product');

Route::get('/contact', [UserController::class, 'contact'])->name('contact');

Route::get('/about', [UserController::class, 'about'])->name('about');

Route::get('/cart', [UserController::class, 'cart'])->name('cart');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('registersave', [UserController::class, 'registersave'])->name('registersave');

Route::get('/orderFormPage/{admin_id}/{vegetable_id}', [UserController::class, 'orderFormPage'])->name('orderFormPage');

Route::post('contractfarming', [UserController::class, 'contractfarming'])->name('contractfarming');


// Admin Routes


Route::get('/addvegetable', [AdminController::class, 'addvegetable'])->name('addvegetable');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/specialOrders', [AdminController::class, 'specialOrders'])->name('specialOrders');

Route::get('/vegetableslist', [AdminController::class, 'vegetableslist'])->name('vegetableslist');

Route::get('/orders', [AdminController::class, 'orders'])->name('orders');

Route::post('logout', [AdminController::class, 'logout'])->name('logout');

Route::post('/addnewvegetable', [AdminController::class, 'addnewvegetable'])->name('addnewvegetable');

Route::get('/edit/{vegetable_id}', [AdminController::class, 'edit'])->name('edit');

Route::put('/changeupdate/{vegetable_id}', [AdminController::class, 'updateVegetable'])->name('changeupdate');

Route::put('/delete/{vegetable_id}', [AdminController::class, 'deleteVegetable'])->name('delete');

Route::post('loginmatch', [AdminController::class, 'loginmatch'])->name('loginmatch');

Route::post('storeOrder', [AdminController::class, 'storeOrder'])->name('storeOrder');

Route::post('Specialorder', [AdminController::class, 'Specialorder'])->name('Specialorder');

Route::get('/contractFarmingPage', [AdminController::class, 'contractFarmingPage'])->name('contractFarmingPage');

Route::get('/confirmOrder/{order_id}', [AdminController::class, 'confirmOrder'])->name('confirmOrder');

Route::get('/cancelOrder/{order_id}', [AdminController::class, 'cancelOrder'])->name('cancelOrder');
