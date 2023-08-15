
@extends('layouts.app')

@section('content')

<div class="container">
    <style>
        /* Styles for the card elements */
        .card {
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* Styling for the card headers */
        .card-header {
            background-color: #f8f9fa;
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
        }

        /* Styling for the card titles */
        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        /* Styling for the card count */
        .card-count {
            font-size: 2rem;
            font-weight: bold;
        }
    </style>
    <div class="row justify-content-center">
    <div class="col-md-4">@include('layouts.sidebar')</div>
    <div class="col-md-8">
        <div class="row">
     
            <div class="col-md-6 col-lg-3 mb-4">
                 <div class="small-box bg-info">
                 <div class="inner">
                    <h3><span class="card-count">{{ $orders->count() }}</span></h3>
                           <p>Orders</p>
                 </div>
                 <div class="icon">
                 <i class="fas fa-shopping-cart"></i>
                 </div>
                    <a href="{{ route("admin.orders") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                 </div>
            </div>
            
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="small-box bg-info">
                <div class="inner">
                    <h3><span class="card-count">{{ $products->count() }}</span></h3>
                           <p>Products</p>
                </div>
                <div class="icon">
                <i class="fas fa-box-open"></i>
                </div>
                   <a href="{{ route("admin.products") }}"class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
         
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3><span class="card-count">{{ $users->count() }}</span></h3>
                               <p>User Registrations</p>
                </div>
                 <div class="icon">
                <i class="fas fa-user-plus"></i>
                </div>
                    <a href="{{ route("admin.users") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3><span class="card-count">{{ $categories->count() }}</span></h3>
                               <p>Categories</p>
                </div>
                 <div class="icon">
                <i class="fas fa-list"></i>
                </div>
                    <a href="{{ route("admin.categories") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            

            
       </div>
       
    </div>  
    </div>
    
</div>

@endsection




