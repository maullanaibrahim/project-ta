<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ppbjController;
use App\Http\Controllers\purchaseController;
use App\Http\Controllers\costRequestController;
use App\Http\Controllers\branchController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\goodsController;
use App\Http\Controllers\errorController;

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

Route::get('/', [loginController::class, 'index'])
    ->middleware('guest')->name('login');

Route::post('/', [loginController::class, 'authenticate'])
    ->name('login.action');

Route::post('/logout', [loginController::class, 'logout'])
    ->name('logout.action');

Route::get('/register', [loginController::class, 'create'])
    ->middleware('guest')->name('login.create');

Route::post('/register', [loginController::class, 'store'])
    ->name('login.store');

Route::get('/home', [homeController::class, 'index'])
    ->middleware('auth')->name('home.index');

Route::get('/ppbj', [ppbjController::class, 'index'])
    ->middleware('auth')->name('ppbj.index');

Route::get('/ppbj-detail{id}', [ppbjController::class, 'show'])
    ->middleware('auth')->name('ppbj.detail');

Route::get('/ppbj-create', [ppbjController::class, 'create'])
    ->middleware('auth')->name('ppbj.create');

Route::get('/ppbj-create/{id}', [ppbjController::class, 'getPemohon'])
    ->middleware('auth')->name('getPemohon');

Route::get('/ppbj-create2/{id}', [ppbjController::class, 'getBarang'])
    ->middleware('auth')->name('getBarang');

Route::post('/ppbj-create', [ppbjController::class, 'store'])
    ->middleware('auth')->name('ppbj.store');

Route::get('/ppbj-update{id}', [ppbjController::class, 'update'])
    ->middleware('auth')->name('ppbj.update');

Route::get('/purchase', [purchaseController::class, 'index'])
    ->middleware('auth')->name('purchase.index');

Route::get('/purchase-create{id}', [purchaseController::class, 'store'])
    ->middleware('auth')->name('purchase.create');

Route::get('/purchase-detail{id}', [purchaseController::class, 'show'])
    ->middleware('auth')->name('purchase.detail');

Route::get('/purchase-update{id}', [purchaseController::class, 'update'])
    ->name('purchase.update');

Route::get('/purchase-delete{id}', [purchaseController::class, 'destroy'])
    ->middleware('auth')->name('purchase.delete');

Route::get('/costRequest', [costRequestController::class, 'index'])
    ->middleware('auth')->name('costRequest.index');

Route::get('/costRequest-create{id}', [costRequestController::class, 'store'])
    ->middleware('auth')->name('costRequest.create');

Route::get('/costRequest-detail{id}', [costRequestController::class, 'show'])
    ->middleware('auth')->name('costRequest.detail');

Route::get('/costRequest-update{id}', [costRequestController::class, 'update'])
    ->middleware('auth')->name('costRequest.update');

Route::get('/costRequest-delete{id}', [costRequestController::class, 'destroy'])
    ->middleware('auth')->name('costRequest.delete');

Route::get('/branch', [branchController::class, 'index'])
    ->middleware('auth')->name('branch.index');

Route::get('/branch-create', [branchController::class, 'create'])
    ->middleware('auth')->name('branch.create');

Route::post('/branch-create', [branchController::class, 'store'])
    ->middleware('auth')->name('branch.store');

Route::get('/branch-update{location}', [branchController::class, 'edit'])
    ->middleware('auth')->name('branch.edit');

Route::patch('/branch-update{location}', [branchController::class, 'update'])
    ->middleware('auth')->name('branch.update');
    
Route::delete('/branch-delete{location}', [branchController::class, 'destroy'])
    ->middleware('auth')->name('branch.delete');

Route::get('/supplier', [supplierController::class, 'index'])
    ->middleware('auth')->name('supplier.index');

Route::get('/supplier-create', [supplierController::class, 'create'])
    ->middleware('auth')->name('supplier.create');

Route::post('/supplier-create', [supplierController::class, 'store'])
    ->middleware('auth')->name('supplier.store');

Route::get('/supplier-update{supplier}', [supplierController::class, 'edit'])
    ->middleware('auth')->name('supplier.edit');

Route::patch('/supplier-update{supplier}', [supplierController::class, 'update'])
    ->middleware('auth')->name('supplier.update');
    
Route::delete('/supplier-delete{supplier}', [supplierController::class, 'destroy'])
    ->middleware('auth')->name('supplier.delete');

Route::get('/goods', [goodsController::class, 'index'])
    ->middleware('auth')->name('goods.index');

Route::get('/goods-create', [goodsController::class, 'create'])
    ->middleware('auth')->name('goods.create');

Route::post('/goods-create', [goodsController::class, 'store'])
    ->middleware('auth')->name('goods.store');

Route::get('/goods-update{barang}', [goodsController::class, 'edit'])
    ->middleware('auth')->name('goods.edit');

Route::patch('/goods-update{barang}', [goodsController::class, 'update'])
    ->middleware('auth')->name('goods.update');
    
Route::delete('/goods-delete{barang}', [goodsController::class, 'destroy'])
    ->middleware('auth')->name('goods.delete');

Route::get('/user', [userController::class, 'index'])
    ->middleware('auth')->name('user.index');

Route::get('/user-create', [userController::class, 'store'])
    ->middleware('auth')->name('user.create');

Route::get('/user-update{id}', [userController::class, 'update'])
    ->middleware('auth')->name('user.update');
    
Route::get('/user-delete{id}', [userController::class, 'destroy'])
    ->middleware('auth')->name('user.delete');