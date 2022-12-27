<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\OrdersController;
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

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminsController::class,'index'])->name('admin.index');

    // List category
    Route::get('/category', [CategorysController::class,'category'])->name('admin.category');
    Route::get('/category_add', [CategorysController::class,'category_add'])->name('admin.category_add');
    Route::get('/category_delete/{id}', [CategorysController::class,'category_delete'])->name('admin.category_delete');

    // List Account
    Route::get('/account', [AccountsController::class,'account'])->name('admin.account');

    // List Product
    Route::get('/product', [ProductsController::class,'product'])->name('admin.product');
    Route::get('/product_add', [ProductsController::class,'product_add'])->name('admin.product_add');

    // list brands
    Route::get('/brands', [BrandsController::class,'brands'])->name('admin.brands');
    Route::get('/brands_add', [BrandsController::class,'brands_add'])->name('admin.brands_add');

    // list  banners
    Route::get('/banners', [BannersController::class,'banners'])->name('admin.banners');
    Route::get('/banners_add', [BannersController::class,'banners_add'])->name('admin.banners_add');

    // list commnents
    Route::get('/comments', [CommentsController::class,'comments'])->name('admin.comments');
    Route::get('/comments_add', [CommentsController::class,'comments_add'])->name('admin.comments_add');

    // list order
    Route::get('/orders', [OrdersController::class,'orders'])->name('admin.orders');
});
