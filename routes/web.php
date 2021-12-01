<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PizzaSizeController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LayoutCatController;
use App\Http\Controllers\LayoutProductController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('categories')->name('cat.')->group(function() {
    Route::get('', [CatController::class, 'index'])->name('index');
    Route::get('create', [CatController::class, 'create'])->name('create');
    Route::post('store', [CatController::class, 'store'])->name('store');
    Route::get('edit/{cat}', [CatController::class, 'edit'])->name('edit');
    Route::post('update/{cat}', [CatController::class, 'update'])->name('update');
    Route::post('delete/{cat}', [CatController::class, 'destroy'])->name('destroy');
});

Route::prefix('tags')->name('tag.')->group(function() {

    Route::get('', [TagController::class, 'index'])->name('index');
    Route::get('create', [TagController::class, 'create'])->name('create');
    Route::post('store', [TagController::class, 'store'])->name('store');
    Route::get('edit/{tag}', [TagController::class, 'edit'])->name('edit');
    Route::post('update/{tag}', [TagController::class, 'update'])->name('update');
    Route::post('delete/{tag}', [TagController::class, 'destroy'])->name('destroy');
});

Route::prefix('pizza-sizes')->name('pizzaSize.')->group(function() {
    Route::get('', [PizzaSizeController::class, 'index'])->name('index');
    Route::get('create', [PizzaSizeController::class, 'create'])->name('create');
    Route::post('store', [PizzaSizeController::class, 'store'])->name('store');
    Route::get('edit/{pizzaSize}', [PizzaSizeController::class, 'edit'])->name('edit');
    Route::post('update/{pizzaSize}', [PizzaSizeController::class, 'update'])->name('update');
    Route::post('delete/{pizzaSize}', [PizzaSizeController::class, 'destroy'])->name('destroy');

});

Route::prefix('extras')->name('extra.')->group(function() {
    Route::get('', [ExtraController::class, 'index'])->name('index');
    Route::get('create', [ExtraController::class, 'create'])->name('create');
    Route::post('store', [ExtraController::class, 'store'])->name('store')->middleware('phconfig:extra');
    Route::get('edit/{extra}', [ExtraController::class, 'edit'])->name('edit');
    Route::post('update/{extra}', [ExtraController::class, 'update'])->name('update')->middleware('phconfig:extra');
    Route::post('delete/{extra}', [ExtraController::class, 'destroy'])->name('destroy')->middleware('phconfig:extra');
});


Route::prefix('products')->name('product.')->group(function() {
    Route::get('', [ProductController::class, 'index'])->name('index');
    Route::get('create', [ProductController::class, 'create'])->name('create');
    Route::post('store', [ProductController::class, 'store'])->name('store')->middleware('phconfig:product');
    Route::get('edit/{product}', [ProductController::class, 'edit'])->name('edit');
    Route::post('update/{product}', [ProductController::class, 'update'])->name('update')->middleware('phconfig:product');
    Route::post('delete/{product}', [ProductController::class, 'destroy'])->name('destroy')->middleware('phconfig:product');
});

Route::prefix('categories-layout')->name('layoutCat.')->group(function() {
    Route::get('', [LayoutCatController::class, 'index'])->name('index');
    Route::get('create', [LayoutCatController::class, 'create'])->name('create');
    Route::post('store', [LayoutCatController::class, 'store'])->name('store');
    Route::post('up/{layoutCat}', [LayoutCatController::class, 'up'])->name('up');
    Route::post('down/{layoutCat}', [LayoutCatController::class, 'down'])->name('down');
    Route::post('delete/{layoutCat}', [LayoutCatController::class, 'destroy'])->name('destroy');
});

Route::prefix('products-layout')->name('layoutProduct.')->group(function() {
    Route::get('/show-cat/{cat?}', [LayoutProductController::class, 'index'])->name('index');
    Route::get('create', [LayoutProductController::class, 'create'])->name('create');
    Route::post('store', [LayoutProductController::class, 'store'])->name('store');
    Route::post('up/{layoutProduct}/{cat}', [LayoutProductController::class, 'up'])->name('up');
    Route::post('down/{layoutProduct}/{cat}', [LayoutProductController::class, 'down'])->name('down');
    Route::post('delete/{layoutProduct}', [LayoutProductController::class, 'destroy'])->name('destroy');
});

Route::prefix('cart')->name('cart.')->group(function() {
    Route::get('view', [CartController::class, 'view'])->name('view');
    Route::post('add/{product}', [CartController::class, 'add'])->name('add');
    Route::post('remove/{product}', [CartController::class, 'remove'])->name('remove');
    Route::post('update', [CartController::class, 'update'])->name('update');
});

Route::prefix('checkout')->name('checkout.')->group(function() {
    Route::get('phone-login', [CheckoutController::class, 'phoneLogin'])->name('phoneLogin');
    Route::post('phone-login', [CheckoutController::class, 'doPhoneLogin'])->name('doPhoneLogin');
    Route::get('create-client/{client}', [CheckoutController::class, 'createClient'])->name('createClient');
    Route::post('store-client/{client}', [CheckoutController::class, 'storeClient'])->name('storeClient');
    Route::get('checkout/{client}', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::post('order/{client}', [CheckoutController::class, 'order'])->name('order');
});


