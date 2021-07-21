@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">
        {{isset($product) ? 'Edit Product': 'Create Product'}}
    </div>
    <div class="card-body">
        <form class="center"action="" method="POST" enctype="multipart/form-data">
        @csrf
        @if (isset($product))
        @method('PUT')
        @endif
        <div class="form-group">
            <label for="title">Product Title</label>
            <input type="text" class="form-control" value="{{ isset($product) ? $product->product_title : '' }}" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="3" class="form-control">{{ isset($product) ? $post->product_description : '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
         <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control">
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