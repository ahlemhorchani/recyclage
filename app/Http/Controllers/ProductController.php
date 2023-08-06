<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
    
        return view('ajouter-categorie-produit.produits', compact('product'));
    }
    
    public function create()
    {
        $categories = Category::all(); // Retrieve all categories from the database

        // Pass the categories to the view along with the form
        return view('ajouter-categorie-produit.ajouter_produit', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            'datecetif'=>'required'
        ]);
    
        $filename = 'produit.png';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/produit', $filename);
        }
    
        $product = new Product();
        $product->title = $request->input('title');
        $product->slug = Str::slug($request->input('title'));
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->inStock = $request->input('inStock');
        $product->image = $filename;
        $product->certife = $request->has('certife') ? true : false; // Assuming 'certife' is a checkbox field
        
        $product->datecetif = $request->input('datecetif');
        $product->category_id = $request->input('category_id');
        $product->date_creation = date('Y-m-d H:i:s'); // Assuming 'date_creation' is a date field
        $product->save();
    
        return redirect()->route('produits')->with('success', 'Product added successfully.');
    }
    public function productList()
    {
        $products = Product::all(); // Suppose que vous avez un modèle "Product" pour les produits
        return view('ajouter-categorie-produit.produits', compact('products'));
    }
    public function show()
    {
        
    }

    
    public function edit(Product $product)
    {
        //
    }

   

public function updateProduct(Request $request,$id)
{
    
    $products = Product::all();
    $product = Product::find($id);

    
    // Mettez à jour les attributs du produit avec les nouvelles valeurs du formulaire
    $product->title = $request->input('title');
    $product->price = $request->input('price');
    $product->inStock = $request->input('inStock');
    $product->description = $request->input('description');
    $product->certified = $request->input('certife', false);
    $product->certification_date = $request->input('datecetif');
    $product->category_id = $request->input('category_id');
    $product->date_creation = $request->input('date_creation');
    
    // Sauvegardez les modifications dans la base de données
    $product->save();

    // Redirigez l'utilisateur vers une autre page (par exemple, la liste des produits)
    return view('ajouter-categorie-produit.editprod', compact('product'));
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product,$id)
    {
    $product = Product::findOrFail($id);
  
    $product->delete();

    return redirect()->route('products')->with('success', 'product deleted successfully');
}
}
