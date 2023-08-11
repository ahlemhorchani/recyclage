@extends('layouts.app')

@section('content')
<div class="container py-2">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <h4>Cart ({{ $items->count() }})</h4>

    <div class="container">
        <div class="row">
            @if ($items->isEmpty())
                <div class="alert alert-warning" role="alert">
                    Your cart is empty!
                    Start shopping <a class="btn btn-success btn-sm" href="{{ route('catalogue-produits.index') }}">Buy Products</a>
                </div>
            @else
                @php
                    $total = 0;
                @endphp

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($items as $item)
                        
                            @php
                                $totalProduct = $item->price * $item->qty;
                                $total += $totalProduct;
                            @endphp
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <img width="80px" src="{{ $item->attributes['image'] ?? asset('path/to/default/image.jpg') }}" alt="">
                                </td>
                                <td>{{ $item->product_name }}</td>
                                <td>
                                    <form action="{{ url('cart/'.$item->id.'/'.$item->product_id) }}" method="post">
                                        @if ($errors->has('qty'))
                                        <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('qty') }}
                                        </div>
                                        @endif
                                        @csrf
                                        @method('patch')
                                        <input type="number" name="qty" value="{{ $item->qty }}" min="1"  max="{{ $item->inStock }}"/>
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                        @if (session('error'))
                                        <script>
                                        document.getElementById('err_{{session("error")}}').style.display = 'block'
                                        
                                        
                                        </script>
                                        @endif
                                        <div id="err_{{$item->id}}" class="msgerr alert alert-danger">
                                        The requested quantity is not available in stock.
                                        </div>

                                    </form>
                                </td>
                                <td>{{ $item->price }} <i class="fa fa-solid fa-dollar"></i></td>
                                <td>{{ $totalProduct }} <i class="fa fa-solid fa-dollar"></i></td>
                                <td>
                                    <form action="{{ route('cart.remove', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                    </form>
                                    
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" align="right"><strong>Total</strong></td>
                            <td>{{ $total }} <i class="fa fa-solid fa-dollar"></i></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right">
                                <form action="{{ route('cart.store') }}" method="post">
                                    @csrf
                                    <input type="submit" class="btn btn-success" name="valider" value="Validate Order">
                                    <input onclick="return confirm('Are you sure you want to empty the cart?')" type="submit" class="btn btn-danger" name="vider" value="Empty Cart">
                                </form>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
