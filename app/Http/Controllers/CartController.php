<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Retourner les articles du panier
    public function index()
    {
        $items = Cart::where('user_id', Auth::user()->id)->get();

        // Calculer le total des produits dans le panier
        $total = $items->sum(function ($item) {
            return $item->price * $item->qty;
        });
    
        return view("cart.index", compact('items', 'total'));
    }

    // Ajouter un article au panier
    public function addProductToCart(Request $request, Product $product)
    {
        $prod = Product::where('id', $request->input('id'))->first();
        if ($prod) {
            Cart::create([
                "user_id" => Auth::user()->id,
                "product_id" => $prod->id,
                "id" => $prod->id,
                "product_name" => $prod->title,
                "price" => (double)$prod->price,
                "qty" => (int)$request->input('qty'),
                "total" => (double)$prod->price * (int)$request->input('qty'),
                "attributes" => ["image" => $prod->image,],
            ]);
        }
        return redirect()->route("cart.index");
    }
    

    public function updateProductOnCart(Request $request, $id, $product_id)
{
    $cartItem = Cart::find($id);
    $inStock= Product::join('orders', 'orders.product_id', '=', 'products.id')
             ->select('orders.*', 'products.inStock')
             ->get();
             $inStock = $inStock[0]['inStock'];
    
    if (!$cartItem) {
        return redirect()->back()->with('error', 'Cart item not found.');
    }
    
    $product = $cartItem->product; // Récupérez le produit associé
    $requestedQty = (int)$request->input('qty'); // Nouvelle quantité

    if ($requestedQty > $inStock) {
        return redirect()->back()->with('error', $id);
    }

    if ($requestedQty <= 0) {
        return redirect()->back()->with('error', 'Invalid quantity. Please enter a valid quantity greater than 0.');
    }

    // Mettre à jour l'article du panier avec la nouvelle quantité
    $cartItem->update([
        'qty' => $requestedQty,
        'total' => (double)$cartItem->price * $requestedQty,
    ]);

    return redirect()->route("cart.index");
}

    

    // Supprimer un produit du panier
    public function removeProductFromCart($id)
    {
          $cart = Cart::findOrFail($id);
          $cart->delete();
      
          return redirect()->route("cart.index");
        
      }
}
