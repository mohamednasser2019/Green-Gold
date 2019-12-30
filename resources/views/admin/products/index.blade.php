@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">الصفحة الرئيسية </a>
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
            <th>product image</th>
            <th>Category</th>
            <th>Product Name</th>         
            <th>benefits of use</th>
            <th>packaging</th>
            <th>usage rates</th>
            <th>about Product</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>product image</th>
            <th>Category</th>
            <th>Product Name</th>
            <th>benefits of use</th>
            <th>packaging</th>
            <th>usage rates</th>
            <th>about Product</th>
            <th>Actions</th>
          </tr>
        </tfoot>
        <tbody>
        	
           @foreach($data as $row)
            <tr>
              <td><img width="100px" height="80px" src="{{ asset('public/uploads/Products_images/'.$row->product_img) }}"></td>
              <td>{{ $row->getCategory->category_name }}</td>
              <td>{{ $row->product_name }}</td>
              <td>{{ $row->benefits_of_use }}</td>
              <td>{{ $row->packaging }}</td>
              <td>{{ $row->usage_rates }}</td>
              <td>{{ $row->aboutProduct }}</td>
     





              <td class="center">
                          <div class="visible-md visible-lg hidden-sm hidden-xs">
                            <a href="{{ URL::to('admin/products/'.$row->id.'/edit') }}" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="تعديل"><i class="fa fa-edit"></i></a>

                        <a class="btn btn btn-xs btn-red tooltips" data-href="{{ URL::to('admin/products/'.$row->id.'/delete') }}" data-toggle="modal" data-target="#confirm-delete" style="color: #FFF" data-original-title="حذف"><i class="fa fa-times fa fa-white">  </i> </a>

                          </div>
                          <div class="visible-xs visible-sm hidden-md hidden-lg">
                            <div class="btn-group">
                              <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i> <span class="caret"></span>
                              </a>
                              <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                                <li>
                                  <a role="menuitem" tabindex="-1" href="{{ URL::to('admin/products/'.$row->id.'/edit') }}">
                                    <i class="fa fa-edit">

                                    </i> Edit
                                  </a>
                                </li>
                                <li>
                                  <a role="menuitem" tabindex="-1" data-href="{{ URL::to('admin/products/'.$row->id.'/delete') }}" data-toggle="modal" data-target="#confirm-delete">
                                    <i class="fa fa-times"></i> Remove
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div></td>
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
