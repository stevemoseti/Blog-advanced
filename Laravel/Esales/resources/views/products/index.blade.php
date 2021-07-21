@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Products</a>
</div>
<div class="card card-default">
    <div class="card-header">Products</div>
    <div class="card-body">
       
        @if ($products->count()>0)
        <table class="table">
            <thead>
                <th>Title</th>
                <th>Image</th>
                <th>Price</th>
                <th>Description</th>
                <th>Status</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Action</th>
            </thead>
            <tbody>
                
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <img src=""  width="60px" height="60px" alt="">
                    </td>
                    <td>
                    
                    </td>
                  
                    <td>
                        
                    </td>
                    <td>
                    
                    </td>
                    <td>
                    <a href="">
                    
                    </a>
                    </td>
                    <td>
                    <a href="">
                    
                    </a>
                    </td>
                
                    <td>
                    <div class='btn-group'>
                        <a href="" class='btn btn-info btn-sm'>
                            <i class="far fa-eye">View</i>
                        </a>
                        <a href="" class='btn btn-warning btn-sm'>
                            <i class="far fa-edit">Edit</i>
                        </a>
                        
                        <a href="" class='btn btn-danger btn-sm'>
                        <form  type="button"action="submit">
                        <i class="far fa-trash">Delete</i>
                        </form>
                        </a>
                        
                        
                    </div>
                    </td>
                </tr>  
                
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