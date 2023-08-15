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
  

    public function showCatalogue(Request $request, $categoryId)
    {
        // Récupère toutes les catégories
        $categories = Category::all();
        
        // Récupère la catégorie en utilisant le modèle d'injection basé sur l'ID
        $selectedCategory = Category::find($categoryId);
        
        // Vérifie si la catégorie sélectionnée existe
        if (!is_null($selectedCategory)) {
            $produits = Product::where('category_id', $selectedCategory->id)
                ->orderBy('date_creation', 'desc')
                ->get();
        } else {
            $produits = Product::orderBy('date_creation', 'desc')->get();
        }

        return view('catalogue-produits.index', compact('categories', 'produits'));
    }
}

