@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center justify-content-between">
<h1 class="mb-0">List Product </h1>
<a href="{{ route('add-product') }}" 
                class="btn btn-primary my-2">
                    <i class="fa fa-plus"></i>
            </a>
  </div>
  @if(Session::has('success'))
       <div class="alert alert-success" role="alert">
         {{ Session::get('success') }}
       </div>
   @endif

    <table class="table table-hover">
      <thead class="table-primary">
            <tr>
            <th>#</th>
                <th>Title</th>
                <th>Price</th>
                <th>Category</th>
                <th>Image</th>
                <th>Certification Date</th>
                <th>In Stock</th>
                <th>Action</th>
            </tr>
         
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                        <td class="align-middle">{{ $product->id }}</td>
                        <td class="align-middle">{{ $product->title }}</td>
                        <td class="align-middle">{{ $product->price }}</td>
                        <td class="align-middle">{{ $product->category->title }}</td>
                        <td class="align-middle">
                          <img src="{{ asset('upload/produit/' . $product->image) }}" alt="{{ $product->title }}" width="100">
                        </td>
                        <td class="align-middle">{{ $product->datecetif }}</td>

                        <td class="align-middle">{{ $product->inStock }}</td>
                               
                        <td class="align-middle">
                             <div class="btn-group" role="group" aria-label="Basic example">
                              
                                   <a href="{{url('update-product/'.$product->id)}}" class="btn btn-warning">Edit</a>&nbsp;
                              
                             <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                             <button class="btn btn-danger m-0">Delete</button>
                             </form>
                             </div>
                      </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
@endsection

