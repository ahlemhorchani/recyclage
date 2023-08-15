<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function addCategory(Request $request)
     {
         $request->validate([
             'title' => 'required',
             'slug' => 'required|unique:categories,slug', // unique in the 'categories' table
         ]);
     
         $category = Category::create([
             "title" => $request->input('title'),
             "slug" => $request->input('slug'),
         ]);
     
         return redirect()->route('ajouter-categorie-produit.categorie')->with('success', 'Category added successfully.');
     }
    public function index()
    {
        $categories = Category::all();
        return view('ajouter-categorie-produit.categorie', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('ajouter-categorie-produit.editcat', compact('category'));
    }

    
  
  
    public function update(Request $request, Category $category)
    {
        $category = Category::find($request->all()['id']);
        
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string',
        ]);
        

        // Mettre à jour les attributs de la catégorie avec les nouvelles valeurs du formulaire
        $category->title= $request->input('title');
        $category->slug = $request->input('slug');

        // Enregistrer les modifications dans la base de données
        $category->save();

        // Rediriger l'utilisateur vers la liste des catégories avec un message de succès
        return redirect('/categorie')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category,$id)
    {
        $category = Category::findOrFail($id);
  
        $category->delete();
    
        return redirect()->route('ajouter-categorie-produit.categorie')->with('success', 'Category deleted successfully');
    }
    public function ddestroy(Category $category,$id)
    {
        $category = Category::findOrFail($id);
  
        $category->delete();
    
        return redirect()->route('admin.index')->with('success', 'Category deleted successfully');
    }
}
