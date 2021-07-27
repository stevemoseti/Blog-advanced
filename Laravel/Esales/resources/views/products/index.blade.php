@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Products</a>
</div>
<div class="card card-default">
    <div class="card-header">Products</div>
    <div class="card-body">
       
        @if ($products->count()>0)
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Price</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product )
                <tr>
                    <td>
                      {{ $product->product_title }}  
                    </td>
                    <td>
                        
                    <img src="{{ asset('storage/'.$product->product_image) }}"  width="20px" height="20px" alt="">
                    </td>
                    <td>
                    {{ $product->product_price}}  
                    </td>
                  
                    <td>
                       {{ $product->product_description }}   
                    </td>
                    <td>
                    {{ $product->product_quantity }}  
                    </td>
                    <td>
                    <a href="{{ route('brands.edit',$product->brand->id) }}">
                    {{ $product->brand->brand_name }}  
                    </a>
                    </td>
                    <td>
                    <a href="{{route('categories.edit',$product->category->id)}}">
                   {{ $product->category->category_name }}
                    </a>
                    </td>
                
                    <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="GET">

                        <a href="{{ route('products.show',$product->id) }}" title="show">
                            <i class="fas fa-eye btn-info btn btn-sm ">view</i>
                        </a>

                        <a href="{{ route('products.edit',$product->id) }}">
                            <i class="fas fa-edit  btn-warning btn btn-sm">Edit</i>
                        </a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                         <i class="fas fa-trash  btn-danger btn btn-sm">Delete</i>
                        </button>
                    </form>
                    </td>
                </tr>  
                @endforeach
            </tbody>
        </table>
        @else
        <h3 class="text-center">
            No Products yet
        </h3>
        @endif
        
           
    </div>
</div>
@endsection