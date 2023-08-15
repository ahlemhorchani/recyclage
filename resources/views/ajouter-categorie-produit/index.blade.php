@extends('layouts.app')

@section('content')
<div class="container">
@include('partials.nav')
    <h1>Add Category or Product</h1>
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-primary btn-lg btn-block" onclick="redirectTo('{{ route('add_category') }}')">Add Category</button>
        </div>
        <div class="col-md-6">
            <button class="btn btn-success btn-lg btn-block" onclick="redirectTo('{{ route('add-product') }}')">Add Product</button>
        </div>

    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-primary btn-lg btn-block" onclick="redirectTo('{{ route('ajouter-categorie-produit.categorie') }}')">List Category </button>
        </div>
        <div class="col-md-6">
            <button class="btn btn-success btn-lg btn-block" onclick="redirectTo('{{ route('ajouter-categorie-produit.produits') }}')">List Product</button>
        </div>

    </div>
   
</div>

<script>
    function redirectTo(url) {
        window.location.href = url;
    }
</script>
@endsection