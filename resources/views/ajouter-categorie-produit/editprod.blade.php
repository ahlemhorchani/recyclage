@extends('layouts.app')
@section('title', 'Edit Product')
@section('content')
<div class="container">
    <h1>Edit Product</h1>
    <div class="container py-2">
        <h4>Edit product</h4>
          @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form method="post" action="{{ route('update.Product', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            
            <input type="hidden" class="form-control" name="id" value="{{ $product->id }}">

            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $product['title'] }}">

            <label class="form-label">Price</label>
            <input type="number" class="form-control" step="0.1" name="price" min="1" value="{{ $product['price']}}">

            <label class="form-label">In Stock</label>
            <input type="number" class="form-control" name="inStock" min="1" value="{{ $product ['inStock']}}">
             <label class="form-label">Discount</label>
            <input type="number" class="form-control" name="discount" min="0" value="{{ $product ['discount']}}">


            <label class="form-label">Description</label>
            <textarea class="form-control" name="description">{{ $product ['description'] }}</textarea>
            

            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="image">
            <div class="row">
            <div class="col-md-4">
            <img src="{{asset('upload/produit/'.$product->image)}}" class="img-responsive">
            </div>
            </div>
            <label class="form-label">Category</label>
               <select name="category_id" class="form-control">
               <option value="">Choose a category</option>
               @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : ''}}>{{ $category->title }}</option>
               @endforeach
               </select>
            <input type="submit" value="Update Product" class="btn btn-primary my-2" name="update_product">
        </form>
        
    </div>
</div>
@endsection
