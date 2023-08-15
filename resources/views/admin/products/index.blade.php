@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-8">
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>In Stock</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title}}</td>
                            <td>{{ Str::limit($product->description,50) }}</td>
                            <td>{{ $product->inStock }}</td>
                            <td>{{ $product->price }} DH</td>
                            <td>
                                {{ $product->user->id }}
                            </td>
                            <td>
                                {{ $product->user->name }}
                            </td>
                            <td>
                                @if($product->inStock > 0)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-times text-danger"></i>
                                @endif
                            </td>

                            <td>
                                <img src="{{ asset($product->image) }}"
                                     alt="{{ $product->title }}"
                                    width="50"
                                    height="50"
                                    class="img-fluid rounded"
                                >
                            </td>
                            <td>
                                {{ $product->category->title }}
                            </td>
                            <td class="d-flex flex-row justify-content-center align-items-center">
                               
                            <button class="btn btn-sm btn-success">
                                        <i class="fa fa-check"></i>
                                    </button>


                                <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                      <button class="btn btn-sm btn-danger">
                                          <i class="fa fa-trash"></i>
                                       </button>
                                    </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
            <div class="justify-content-center d-flex">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
