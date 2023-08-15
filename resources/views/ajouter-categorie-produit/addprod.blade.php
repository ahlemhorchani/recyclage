@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Product</h1>
    <div class="container py-2">
        <h4>Add product</h4>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('submit_product_for_approval') }}" enctype="multipart/form-data">
            @csrf

            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title">

            <label class="form-label">Price</label>
            <input type="number" class="form-control" step="0.1" name="price" min="0">

            <label class="form-label">In Stock</label>
            <input type="number" class="form-control" name="inStock" min="0">

            <label class="form-label">Discount</label>
            <input type="number" class="form-control" name="discount" min="0">

            <label class="form-label">Description</label>
            <textarea class="form-control" name="description"></textarea>

            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="image">

            <label class="form-label">Certified</label>
            <input type="checkbox" class="form-control" name="certife" value="1">

            <label class="form-label">Certification Date</label>
            <input type="date" class="form-control" name="datecetif" required>

            <!-- New field: Category -->
            <label class="form-label">Category</label>
        <select name="category_id" class="form-control">
            <option value="">Choose a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
          <input type="submit" value="Submit for Approval" class="btn btn-primary my-2" name="submit_product">
         </form>
    </div>
</div>
@endsection