<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Producto;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get("/", function () {
    return response()->json(Producto::all());
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("productos", function () {
    return response()->json(Producto::all());
});


Route::post("/productos", function(Request $request){
    $producto = new Producto($request->input());
    $producto->saveOrFail();
    return response()->json(["data" => "true"]);
});
Route::get("/productos/{id}", function($id){
    $producto = Producto::findOrFail($id);
    return response()->json($producto);
});
Route::put("/producto", function(Request $request){
    $producto = Producto::findOrFail($request->input("id"));
    $producto->fill($request->input());
    $producto->saveOrFail();
    return response()->json(true);
});
Route::delete("/productos/{id}", function($id){
    $producto = Producto::findOrFail($id);
    $producto->delete();
    return response()->json(true);
});

Route::get("ventas", function () {
    return response()->json(Venta::all());
});

Route::post("/ventas", function(Request $request){
    $venta = new Venta($request->input());
    $venta->saveOrFail();
    return response()->json(["data" => "true"]);
});
Route::get("/ventas/{id}", function($id){
    $venta = Venta::findOrFail($id);
    return response()->json($venta);
});
