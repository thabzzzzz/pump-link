<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
 
//Route::get('/', function () {
//    return view('welcome');
//});
 
//Cart functionality
Route::get('/quote', [ProductsController::class, 'quote']);
Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [ProductsController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ProductsController::class, 'remove'])->name('remove_from_cart');


//Pages
Route::get('/', [ProductsController::class, 'home']);
Route::get('/aboutUs', [ProductsController::class, 'aboutUs']);
Route::get('/services', [ProductsController::class, 'services']);
Route::get('/contactUs', [ProductsController::class, 'contactUs']);
Route::get('/community', [ProductsController::class, 'community']);

//Quote generation
Route::get('/generate', [ProductsController::class, 'generateQuote']);
Route::get('/viewQuote', [ProductsController::class, 'viewQuote']);

//Form data
Route::post('/users', [ProductsController::class, 'getData']);
Route::view('login','users' );

// Route::post('/viewQuote', [ProductsController::class, 'getData']);
// Route::view('login','users' );