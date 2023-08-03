<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //return cart items
    public function index()
    {
        return view("cart.index")->with([
            "items" => Cart::all()
        ]);
    }

    //add item to cart
    public function addProductToCart(Request $request, Product $product)
    {
        $prod = Product::where('id',$request->all()['id'])->get();
        
        Cart::create(array(
            "user_id"=>Auth::user()->id,
            "id" => $request->all()['id'],
            "product_name" => $prod[0]['title'],
            "price" => (double)$prod[0]['price'],
            "qty" => (int)$prod[0]['qty'],
            
            "total"=>(double)$prod[0]['price']*(int)$request->all()['qty']
            
           
        ));
        return redirect()->route("cart.index");
    }

    //update item on cart
    public function updateProductOnCart(Request $request, Product $product)
    {
             Cart::update($product->id, array(
                   'quantity' => array(
                   'relative' => false,
                   'value' => $request->qty
            ),
        ));
        return redirect()->route("cart.index");
    }

  // Supprimer un produit du panier
public function removeProductFromCart(Product $product)
{
    Cart::remove($product->id);
    return redirect()->route("cart.index")->with('success', 'Product has been removed from the cart successfully.');
}

}


