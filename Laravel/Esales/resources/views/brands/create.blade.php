@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">
        {{ isset($brand) ? 'Edit Brand':'Create Brand' }}
    </div>
    <div class="card-body">
    


        <form action="{{ isset($brand) ? route('brands.update', $brand->id) : route('brands.store') }}" method="POST">
            @csrf

            @if (isset($brand))
            @method('PUT')
            @endif

            <div class="form-group">
                <label for="name">Brand Name</label>
                <input type="text" id="brand_name" class="form-control" name="brand_name" value="{{ isset($brand) ? $brand->brand_name :'' }}">
            </div>
            <div class="form-group">
                <button  class="btn btn-success">
                    {{ isset($brand) ? 'Update Brand' : 'Add Brand' }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection