<?php

namespace App\Http\Controllers;


use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function add($id)
    {
        $producto = Producto::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $producto->descripcion,
                "quantity" => 1,
                "price" => $producto->precio_venta,
                "image" => $producto->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function shop()
    {
        $producto = Producto::all();
        return view('catalogo',)->withTitle('E-COMMERCE STORE | SHOP')->with(['productos' => $producto]);
    }

    public function cart()  {
        return view('cart');
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart')->with('success_msg', 'Car is cleared!');
    }

}
