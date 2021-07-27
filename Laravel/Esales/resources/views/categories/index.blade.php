@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('categories.create') }}" class="btn btn-success float-right">Add Category</a>
</div>
<div class="card card-default">
    <div class="card-header">Categories</div>
    <div class="card-body">
        @if ($categories->count()>0)

           <table class="table table-bordered table-striped text-center">
            <thead>
                <th>Name</th>
                <th>Products Count</th>
                <th>Action</th>
                <tbody>
                    @foreach ($categories as $category )
                    <tr>
                       
                        <td>
                            {{ $category->category_name }}
                        </td>
                         <td>
                          {{ $category->products->count() }}
                        </td>
                        <td>
                              <div class='btn-group'>
                                <a href="{{ route('categories.edit',$category->id) }}" class='btn btn-warning btn-sm'>
                                    <i class="fas fa-edit">Edit</i>
                                </a>
                              </div>
                              <div class="btn-group"  >
                                {{-- <a href="{{ route('categories.destroy',$category->id) }}" class='btn btn-danger btn-sm'> --}}
                                  
                                {{ Form::open(array('url' => 'categories/' . $category->id, 'class' => 'pull-right')) }}
                                {{ Form::hidden('_method', 'DELETE') }} 
                                {{ Form::button('<i class="fa fa-trash">Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
                                {{ Form::close() }}  
                                {{-- </a> --}}
                             </div> 
                            
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </thead>
        </table>
<!-- Modal -->
<div class="modal fade" id="deleteModel" tabindex="-1" aria-labelledby="deleteModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="" method="POST" id="deleteCategoryForm">
        @csrf
        @method('DELETE')
        <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModelLabel">Delete Category</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="text-center text-bold">Are you sure you want to delete this category? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-danger">Yes</button>
      </div>
    </div>
    </form>
  </div>
</div>
@else
     <h3 class="text-center">No categories yet</h3>
       
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
