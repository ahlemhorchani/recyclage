<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CatalogueProduitsController extends Controller
{
    
    public function index()
    {
        $produits = Product::getAllProducts();
        

        return view('catalogue-produits.index', compact('produits'));
    }
  

public function showCatalogue()
{
    $categoryId = request()->query('id');
    $categories = Category::all();
    
    if (!is_null($categoryId)) {
        $produits = Product::where('category_id', $categoryId)
            ->orderBy('date_creation', 'desc')
            ->get();
    } else {
        $produits = Product::orderBy('date_creation', 'desc')->get();
    }

    return view('catalogue-produits.index', compact('categories', 'produits'));
}

}
// app/Http/Controllers/CatalogueProduitsController.php

