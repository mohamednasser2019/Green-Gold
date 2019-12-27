@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Products</li>
</ol>
@endsection


@section('content')

<!-- DataTables Example -->
<div style="margin-bottom: 10px;">
	<a href="{{ URL::to('admin/products/create') }}" class="btn btn-primary btn-sm">Add New Product</a>
</div>
<div class="card mb-3">
  <div class="card-header">
    	<i class="fas fa-table"></i> All Products Data
	</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>product image</th>
            <th>Category</th>
            <th>Product Name</th>         
            <th>benefits of use/th>
            <th>usage rates</th>
            <th>about Product</th>
            <th>created by</th>
            <th>Created At</th>
            <th>Updates At</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>product image</th>
            <th>Category</th>
            <th>Product Name</th>
            <th>benefits of use</th>
            <th>usage rates</th>
            <th>about Product</th>
            <th>created by</th>
            <th>Created At</th>
            <th>Updates At</th>
            <th>Actions</th>
          </tr>
        </tfoot>
        <tbody>
        	
           @foreach($data as $row)
            <tr>
              <td>{{ $row->id }}</td>
              <td><img width="100px" height="80px" src="{{ asset('public/uploads/Products_images/'.$row->product_img) }}"></td>
              <td>{{ $row->getCategory->name }}</td>
              <td>{{ $row->product_name }}</td>
              <td>{{ $row->benefits_of_use }}</td>
              <td>{{ $row->usage_rates }}</td>
              <td>{{ $row->aboutProduct }}</td>
              <td>{{ $row->getUser->name }}</td>
             
              <td>{{ $row->created_at->format('Y-d-m') }}</td>
              <td>{{ $row->updated_at->format('Y-d-m') }}</td>
              <td>
                <a class="btn btn-primary btn-sm previewData" data-id="{{ $row->id }}" data-toggle="modal" data-target="#modal-view" style="color: #FFF">Show</a>
                <a href="{{ URL::to('admin/products/'.$row->id.'/edit') }}" class="btn btn-info btn-sm">Edit</a>
                
                <a class="btn btn-danger btn-sm" data-href="{{ URL::to('admin/products/'.$row->id.'/delete') }}" data-toggle="modal" data-target="#confirm-delete" style="color: #FFF">Delete</a>
              </td>
            </tr>
           @endforeach

        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

@endsection


@section('ourscript')

$('.previewData').click(function() {
    var id = $(this).attr('data-id');
    $.ajax({
        type: 'get',
        url: '{{ url('') }}/products/'+id,
        dataType: 'html',
        before:function(){
            $("#modal-view .modal-content .modal-title").html('Loading ..');
            $("#modal-view .modal-content .modal-body").html('<i class="fa fa-spinner fa-spin fa-5x fa-fw"></i>');
        },
        success:function(result){
            $("#modal-view .modal-content .modal-title").html('<i class="fa fa-user"></i> Product Data');
            $("#modal-view .modal-content .modal-body").html(result);
        }
    });
});

@endsection
