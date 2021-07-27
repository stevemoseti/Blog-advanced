@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">
        {{isset($product) ? 'Edit Product': 'Create Product'}}
    </div>
    @include('partials.errors')
    <div class="card-body">
        
<form action="{{ isset($product) ? route('products.update',$product->id) : route('products.store') }}" method="POST" enctype="multipart/form-data">        @csrf
        @if (isset($product))
        @method('PUT')
        @endif
        <div class="form-group">
            <label for="title">Product Title</label>
            <input type="text" class="form-control" value="{{ isset($product) ? $product->product_title : '' }}" name="product_title" id="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="product_description" id="description" cols="30" rows="3" class="form-control">{{ isset($product) ? $product->product_description : '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" value="{{ isset($product) ? $product->product_quantity : '' }}" name="product_quantity" id="quantity">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" value="{{ isset($product) ? $product->product_price : '' }}" name="product_price" id="price">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control"value="{{ isset($product) ? $product->product_image : '' }}" name="product_image" id="image">
        </div>
         <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control">
                {{-- <option value="2">tedts</option> --}}
                @foreach ($categories as $category )  
                <option value="{{ $category->id }}"
                 @if (isset($product))
                    @if ($category->id==$product->category_id)
                        selected
                    @endif
                 @endif
                >
                {{ $category->category_name }}
                </option>
                @endforeach
            </select>
        </div>
         <div class="form-group">
            <label for="brand">Brand</label>
            <select name="brand" id="brand" class="form-control">
                @foreach ($brands as $brand )
                <option value="{{ $brand->id }}"
                 @if (isset($product))
                    @if ($brand->id==$product->brand_id)
                        selected
                    @endif
                 @endif
                >
                {{ $brand->brand_name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
                <button  class="btn btn-success">
                    {{ isset($product) ? 'Update product' : 'Add Product' }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection