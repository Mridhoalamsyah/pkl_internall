<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\isAdmin;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route admin (backend)
Route::group(['prefix' => 'admin', 'middleware' => ['auth',isAdmin::class]], function() {
    Route::get('/', function(){
        return view('admin.index');
    });
    // untuk route admin lainnya
    Route::resource('user', App\Http\Controllers\UsersController::class);
    Route::resource('kategori', kategoriController::class);
    Route::resource('produk', ProdukController::class);
});


//rote frotend
Route::get('/',[FrontController::class, 'index']);
Route::get('contact',[FrontController::class, 'contact']);
Route::get('shop',[FrontController::class, 'shop']);
Route::get('cart',[FrontController::class, 'cart']);
Route::get('checkout',[FrontController::class, 'checkout']);
Route::get('track',[FrontController::class, 'track']);
Route::get('aboute',[FrontController::class, 'aboute']);
Route::get('detailproduk',[FrontController::class, 'detailproduk']);
