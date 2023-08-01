<!-- resources/views/add-category.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Category</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('add_category') }}">
        @csrf

        <div class="form-group">
            <label for="title">Category Title:</label>
            <input type="text" class="form-control" name="title" id="title" required>
        </div>

        <div class="form-group">
            <label for="slug">Category Slug:</label>
            <input type="text" class="form-control" name="slug" id="slug" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
</div>
@endsection

