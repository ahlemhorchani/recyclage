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
                        <th>Slug</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title}}</td>
                            <td>{{ $category->slug }}</td>
                            
                            <td class="d-flex flex-row justify-content-center align-items-center">
                               
                            <button class="btn btn-sm btn-success">
                                        <i class="fa fa-check"></i>
                                    </button>
                             

                               <form action="{{ route('categorie.destroy', $category->id) }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>
@endsection