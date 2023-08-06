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
        // Récupérer les articles du panier pour l'utilisateur actuellement connecté
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
                "id" => $prod->id,
                "product_name" => $prod->title,
                "price" => (double)$prod->price,
                "qty" => (int)$request->input('qty'),
                "total" => (double)$prod->price * (int)$request->input('qty'),
                "attributes" => [
                    "image" => $prod->image,
                ],
            ]);
        }
        return redirect()->route("cart.index");
    }

    // Mettre à jour un article dans le panier
    public function updateProductOnCart(Request $request, $id)
    {   
        $rules = [
            'qty' => 'required|integer|min:1',
        ];
        $request->validate($rules);
        $cart = Cart::findOrFail($id);
        $qty = (int)$request->input('qty');
    
        // Vérifier si la nouvelle quantité est valide (supérieure à 0)
        if ($qty > 0) {
            $cart->update([
                'qty' => $qty,
                'total' => (double)$cart->price * $qty,
            ]);
    
            return redirect()->route("cart.index");
        } else {
            // Gérer le cas où la quantité est invalide (<= 0)
            return redirect()->back()->with('error', 'Invalid quantity. Please enter a valid quantity greater than 0.');
        }
        
    }
    

    // Supprimer un produit du panier
    public function removeProductFromCart($id)
    {
          $cart = Cart::findOrFail($id);
          $cart->delete();
      
          return redirect()->route("cart.index");
        
      }
}
