@extends('layouts.app')
@section('title', 'Edit Product')
@section('content')
<div class="container">
    <h1>Edit Categrey</h1>
    <div class="container py-2">
          @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

      <form method="post" action="{{ route('update.Category', $category->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

                 <input type="hidden" class="form-control" name="id" value="{{ $category->id }}">
            
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $category['title'] }}">
        
                <label for="slug">Slug</label>
                <input type="text" name="slug"class="form-control" value="{{ $category['slug'] }}">

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
@endsection

