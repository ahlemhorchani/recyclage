<!-- resources\views\ajouter-categorie-produit\index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Category or Product</h1>
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-primary btn-lg btn-block" onclick="redirectTo('{{ route('add_category') }}')">Add Category</button>
        </div>
        <div class="col-md-6">
            <button class="btn btn-success btn-lg btn-block" onclick="redirectTo('{{ route('add-product') }}')">Add Product</button>
        </div>

    </div>
   
</div>

</div>

<script>
    function redirectTo(url) {
        window.location.href = url;
    }
</script>
@endsection

