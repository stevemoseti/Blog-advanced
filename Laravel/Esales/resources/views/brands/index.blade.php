@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('brands.create') }}" class="btn btn-success float-right">Add Brand</a>
</div>
<div class="card card-default">
    <div class="card-header">Brands</div>
    <div class="card-body">
        
     @if ($brands->count()>0)
           <table class="table table-bordered table-striped text-center">
            <thead>
                <th>Name</th>
                <th>Products Count</th>
                <th>Action</th>
                <tbody>
                    @foreach ($brands as $brand )
                    <tr>
                       
                        <td>
                            {{ $brand->brand_name }}
                        </td>
                         <td>
                           {{ $brand->products->count() }}
                        </td>
                        <td >
                            <div class='btn-group'>
                                <a href="{{ route('brands.edit',$brand->id) }}" class='btn btn-warning btn-sm'>
                                    <i class="fas fa-edit">Edit</i>
                                </a>
                              </div>
                              <div class="btn-group"  >
                                {{-- <a href="{{ route('brands.destroy',$brand->id) }}" class='btn btn-danger btn-sm'> --}}
                                  
                                {{ Form::open(array('url' => 'brands/' . $brand->id, 'class' => 'pull-right')) }}
                                {{ Form::hidden('_method', 'DELETE') }} 
                                {{ Form::button('<i class="fa fa-trash">Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger  btn-sm'] )  }}
                                {{ Form::close() }}  
                                {{-- </a> --}}
                             </div>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </thead>
        </table>


@else
     <h3 class="text-center">No Brands yet</h3>
       
@endif



    </div>
</div>

@endsection

@section('scripts')
<script>
    function handleDelete(id)
    {
        var form = document.getElementById('deleteCategoryForm')
        form.action = '/categories/'+id
        $('#deleteModel').modal('show')
    }
</script>
@endsection
