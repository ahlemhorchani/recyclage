@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center justify-content-between">
<h1 class="mb-0">List Category </h1>
<a href="{{ route('add-category') }}" class="btn btn-primary">add_category</a>
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
                <th>Category Title</th>
                <th>Category Slug</th>
                <th>Action</th>
            </tr>
         
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                        <td class="align-middle">{{ $category->id }}</td>
                        <td class="align-middle">{{ $category->title }}</td>
                        <td class="align-middle">{{ $category->Slug }}</td>
                        <td class="align-middle">
                             <div class="btn-group" role="group" aria-label="Basic example">
                              <a href="{{url('update-category/'.$category->id)}}" class="btn btn-warning">Edit</a>&nbsp;
                             <form action="{{ route('destroy',$category->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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

