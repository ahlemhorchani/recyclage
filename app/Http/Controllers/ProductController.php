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
        //
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
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation rule for the image
            // Add validation rules for other fields if needed
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
        $product->date_creation = $request->input('date_creation'); // Assuming 'date_creation' is a date field
        $product->save();
    
        return redirect()->route('produits')->with('success', 'Product added successfully.');
    }
   
    public function show()
    {
        
    }

    
    public function edit(Product $product)
    {
        //
    }

   

public function updateProduct(Request $request, $id)
{
    // Validez les champs du formulaire ici

    // Récupérez le produit à mettre à jour depuis la base de données
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
    return redirect()->route('products.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
    
    
}
