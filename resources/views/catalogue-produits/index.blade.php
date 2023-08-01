@extends('layouts.app')

@section('content')
<script src="{{ asset('js/custom.js') }}"></script>

<div class="container">
    <h1>Catalog of products</h1>
    <div class="container py-2">
        @php
            $categoryId = request()->query('id');
            $categories = \App\Models\Category::all();
            $activeClasses = 'active bg-success rounded border-success';
        @endphp

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group list-group-flush position-sticky sticky-top">
                        <h4 class=" mt-4"><i class="fa fa-light fa-list"></i> List of categories</h4>
                        <li class="list-group-item {{ is_null($categoryId) ? $activeClasses : '' }}">
                            <a class="btn btn-default w-100" href="{{ url('/catalogue-produits') }}">
                                <i class="fa fa-solid fa-border-all"></i> All Products
                            </a>
                        </li>
                        @foreach ($categories as $categorie)
                            @php
                                $active = $categoryId === $categorie->id ? $activeClasses : '';
                            @endphp
                            <li class="list-group-item {{ $active }}">
                                <a class="btn btn-default w-100"
                                    href="{{ url('/catalogue-produits', ['id' => $categorie->id]) }}">
                                    <i class="fa {{ $categorie->icone }}"></i> {{ $categorie->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col mt-4">
                    <div class="row">
                        @foreach ($produits as $produit)
                            <!-- Affichage des produits -->
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="{{ $produit->image }}" class="card-img-top" alt="{{ $produit->title }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $produit->title }}</h5>
                                        <p class="card-text">{{ $produit->description }}</p>
                                        <p class="card-text">Price : {{ $produit->price }} €</p>
                                        <p class="card-text">InStock : {{ $produit->inStock}}</p>
                                        <p class="card-text">certify : {{ $produit->certife}}</p>
                                        <p class="card-text">Certification Date : {{ $produit->datecetif}}</p>
                                    </div>
                                      <div>
        @php
            $idUtilisateur = Auth::check() ? Auth::user()->id : 0;
            $qty = $idUtilisateur !== 0 ? $produit->qty : 0;
            $button = $qty == 0 ? '<i class="fa fa-light fa-cart-plus"></i>' : '<i class="fa-solid fa-pencil"></i>';
        @endphp

        @if ($idUtilisateur !== 0)
            <!-- Inside the loop for displaying products -->
       <form method="post" class="counter d-flex" action="{{ route('add.cart', ['idProduit' => $produit->id]) }}">
        @csrf
       <button class="btn btn-primary mx-2 counter-moins" type="button">-</button>
      <input type="hidden" name="id" value="{{ $produit->id }}">
      <input class="form-control" value="{{ $qty }}" type="number" name="qty" id="qty" max="99">
    <button class="btn btn-primary mx-2 counter-plus mx-1" type="button">+</button>

    <button class="btn btn-success btn-sm" type="submit" name="ajouter">
        {!! $button !!}
    </button>

    @if ($qty != 0)
        <button formaction="{{ route('remove.cart', ['idProduit' => $produit->id]) }}" class="btn btn-sm btn-danger mx-1" type="submit" name="supprimer">
            <i class="fa-solid fa-trash"></i>
        </button>
    @endif
</form>


               
        @else
            <div class="alert alert-warning" role="alert">
                Vous devez être connecté pour acheter ce produit <strong><a href="{{ url('/connexion') }}">Connexion</a></strong>
            </div>
        @endif
    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  
@endsection 
<script>
    // Assuming you are using jQuery
$(document).ready(function () {
    // Attach click event handler to decrement button
    $('.counter-moins').click(function () {
        var input = $(this).siblings('input[type="number"]');
        var currentValue = parseInt(input.val());
        if (currentValue > 0) {
            input.val(currentValue - 1);
        }
    });

    // Attach click event handler to increment button
    $('.counter-plus').click(function () {
        var input = $(this).siblings('input[type="number"]');
        var currentValue = parseInt(input.val());
        if (currentValue < 99) {
            input.val(currentValue + 1);
        }
    });
});

</script>
