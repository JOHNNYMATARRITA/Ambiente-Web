<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\CartController@shop')->name('shop');
Route::get('/cart', 'App\Http\Controllers\CartController@cart')->name('cart.index');
Route::post('/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.store');
Route::patch('/update', 'App\Http\Controllers\CartController@update')->name('update.cart');
Route::delete('/remove', 'App\Http\Controllers\CartController@remove')->name('remove.from.cart');


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::resource('productos', 'App\Http\Controllers\ProductoController');
});




/*Rutas del SGV*/

//Route::get('/home', 'App\http\Controllers\HomeController@index')->name('home');
Route::get('/producto', 'App\http\Controllers\ProductoController@index')->name('productos');
//Route::get('/user', 'App\http\Controllers\UserController@index')->name('users');
Route::get('/venta', 'App\http\Controllers\VentasController@index')->name('ventas');

Route::post('/store/cart-add', [App\Http\Controllers\CartController::class,'add'])->name('cart.add');
//Route::resource("productos", "ProductosController");



Route::get("/acerca-de", function () {
    return view("misc.acerca_de");
})->name("acerca_de.index");
