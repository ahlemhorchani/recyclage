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
     
         return redirect()->route('categories.index')->with('success', 'Category added successfully.');
     }
    public function index()
    {
        //
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
        return view('categories.edit', compact('category'));
    }

    
  
public function update(Request $request, $id)
{
    $category = Category::find($id);

    if (!$category) {
        return redirect()->route('categories.index')
            ->with('error', 'Category not found.');
    }

    $request->validate([
        'title' => 'required',
        'slug' => 'required',
    ]);

    $category->update([
        "title" => $request->input('title'),
        "slug" => $request->input('slug'),
    ]);

    return redirect()->route('categories.index')
        ->with('success', 'Category updated successfully.');

}
    /**
     * Update the specified resource in storage.
     */
   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
