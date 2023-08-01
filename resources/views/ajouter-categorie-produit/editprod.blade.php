<!-- edit_product.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Product</h1>
    <div class="container py-2">
        <h4>Edit product</h4>

        <!-- Afficher les erreurs de validation ici si nécessaire -->

        <form method="post" action="{{ route('updateProduct', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title">

            <label class="form-label">Price</label>
            <input type="number" class="form-control" step="0.1" name="price" min="0">

            <label class="form-label">In Stock</label>
            <input type="number" class="form-control" name="inStock" min="0">

            <label class="form-label">Description</label>
            <textarea class="form-control" name="description"></textarea>

            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="image">

            <label class="form-label">Certified</label>
            <input type="checkbox" class="form-control" name="certife" value="1">

            <label class="form-label">Certification Date</label>
            <input type="date" class="form-control" name="datecetif">

            <!-- New field: Category -->
            <label class="form-label">Category</label>
        <select name="category_id" class="form-control">
            <option value="">Choose a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
         <!-- New field: Date Creation (nullable) -->
            <label class="form-label">Date Creation</label>
            <input type="date" class="form-control" name="date_creation">

            <input type="submit" value="Update Product" class="btn btn-primary my-2" name="update_product">
        </form>
    </div>
</div>
@endsection
