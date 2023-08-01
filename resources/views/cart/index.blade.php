@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 card p-3">
            <h4 class="text-dark mb-4">Your Cart</h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>
                                <img src="{{ asset($item->associatedModel->image) }}"
                                    alt="{{ $item->name }}"
                                    width="50"
                                    height="50"
                                    class="img-thumbnail"
                                >
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <form class="form-inline" action="{{ route('update.cart', $item->associatedModel->slug) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group">
                                        <input type="number" name="qty" id="qty"
                                            value="{{ $item->quantity }}"
                                            placeholder="Quantity"
                                            max="{{ $item->associatedModel->inStock }}"
                                            min="1"
                                            class="form-control"
                                        >
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-sm btn-outline-success">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>{{ $item->price }} $</td>
                            <td>{{ $item->price * $item->quantity }} $</td>
                            <td>
                                <div class="d-flex">
                                    <form class="form-inline mr-1" action="{{ route('remove.cart', $item->associatedModel->slug) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Remove</button>
                                    </form>
                                    <a href="{{ route('product.details', $item->associatedModel->slug) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> Edit</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        <!-- ... Ligne pour le total ... -->
                    </tbody>
                </table>
            </div>
            @if(Cart::Subtotal() > 0)
            <div class="form-group text-center">
                <a href="{{ route('make.payment') }}" class="btn btn-primary mt-3">
                    Pay {{ Cart::Subtotal() }} $ via PayPal
                </a>
            </div>
            @else
            <div class="text-center mt-3">
                <p>Your cart is empty.</p>
                <a href="{{ url('/catalogue-produits') }}" class="btn btn-primary">Continue Shopping</a>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
