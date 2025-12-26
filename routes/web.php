<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;


// User Routes
Route::controller(UserController::class)->group(function () {
    Route::get('/sudarshanerror', 'sudarshanerror')->name('sudarshanerror');
    Route::get('/', 'index')->name('index');
    Route::get('/products', 'product')->name('product');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/about', 'about')->name('about');
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/register', 'register')->name('register');
    Route::get('/login', 'login')->name('login');
    Route::post('registersave', 'registersave')->name('registersave');
    Route::get('/orderFormPage/{admin_id}/{vegetable_id}', 'orderFormPage')->name('orderFormPage');
    Route::post('contractfarming', 'contractfarming')->name('contractfarming');
});


// Admin Routes
Route::controller(AdminController::class)->group(function () {
    Route::get('/addvegetable', 'addvegetable')->name('addvegetable');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/specialOrders', 'specialOrders')->name('specialOrders');
    Route::get('/vegetableslist', 'vegetableslist')->name('vegetableslist');
    Route::get('/orders', 'orders')->name('orders');
    Route::post('logout', 'logout')->name('logout');
    Route::post('/addnewvegetable', 'addnewvegetable')->name('addnewvegetable');
    Route::get('/edit/{vegetable_id}', 'edit')->name('edit');
    Route::put('/changeupdateAdminVegetable/{vegetable_id}', 'changeupdateAdminVegetable')->name('changeupdateAdminVegetable');
    Route::put('/deletevegetableAdmin/{vegetable_id}', 'deleteVegetable')->name('deletevegetableAdmin');
    Route::post('loginmatch', 'loginmatch')->name('loginmatch');
    Route::post('storeOrder', 'storeOrder')->name('storeOrder');
    Route::post('Specialorder', 'Specialorder')->name('Specialorder');
    Route::get('/contractFarmingPage', 'contractFarmingPage')->name('contractFarmingPage');
    Route::get('/adminProfile', 'adminProfile')->name('adminProfile');
    Route::put('/updateProfile', 'updateProfile')->name('updateProfile');
    Route::get('/confirmOrder/{order_id}', 'confirmOrder')->name('confirmOrder');
    Route::get('/cancelOrder/{order_id}', 'cancelOrder')->name('cancelOrder');
    Route::get('/invoice/{order_id}', 'invoice')->name('invoice');
    
    // Google Auth
    Route::get('auth/google', 'googleLogin');
    Route::get('google/callback', 'googleAuthentication');
});


// Super Admin Routes
Route::controller(SuperAdminController::class)->middleware('superAdmin')->group(function () {
    Route::get('/superadmin/traders', 'traders')->name('superadmin.traders');
    Route::get('/superadmin/traders/{id}/edit', 'editTrader')->name('superadmin.traders.edit');
    Route::post('/superadmin/traders/{id}/update', 'updateTrader')->name('superadmin.traders.update');
    Route::delete('/superadmin/traders/{id}/delete', 'deleteTrader')->name('superadmin.traders.delete');
    Route::get('manageVegetables', 'manageVegetables')->name('manageVegetables');
    Route::put('/delete/{vegetable_id}', 'deleteVegetable')->name('superadmin.deleteVegetable');
    Route::put('/changeupdate/{vegetable_id}', 'updateVegetable')->name('superadmin.updateVegetable');
    Route::get('/superadmin/orders', 'allOrders')->name('superadmin.orders');
});        