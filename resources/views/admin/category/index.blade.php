@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">لصفحة الرئيسية </a>
  </li>
  <li class="breadcrumb-item active">Categories</li>
</ol>
@endsection


@section('content')

<!-- DataTables Example -->
		<div style="margin-bottom: 10px;">
			<a href="{{ URL::to('admin/categories/create') }}" class="btn btn-primary btn-sm">Add New Category</a>
		</div>
        <div class="card mb-3">
          <div class="card-header">
            	<i class="fas fa-table"></i> All Categories Data
        	</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updates At</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updates At</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                	
                   @foreach($data as $row)
                    <tr>
                      <td>{{ $row->category_name }}</td>
                      <td>{{ $row->created_at->format('Y-d-m') }}</td>
                      <td>{{ $row->updated_at->format('Y-d-m') }}</td>
                


                       <td class="center">
                          <div class="visible-md visible-lg hidden-sm hidden-xs">
                            <a href="{{ URL::to('admin/categories/'.$row->id.'/edit') }}" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="تعديل"><i class="fa fa-edit"></i></a>

                        <a class="btn btn btn-xs btn-red tooltips" data-href="{{ URL::to('admin/categories/'.$row->id.'/delete') }}" data-toggle="modal" data-target="#confirm-delete" style="color: #FFF" data-original-title="حذف"><i class="fa fa-times fa fa-white">  </i> </a>

                          </div>
                          <div class="visible-xs visible-sm hidden-md hidden-lg">
                            <div class="btn-group">
                              <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i> <span class="caret"></span>
                              </a>
                              <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                                <li>
                                  <a role="menuitem" tabindex="-1" href="{{ URL::to('admin/categories/'.$row->id.'/edit') }}">
                                    <i class="fa fa-edit">

                                    </i> Edit
                                  </a>
                                </li>
                                <li>
                                  <a role="menuitem" tabindex="-1" data-href="{{ URL::to('admin/categories/'.$row->id.'/delete') }}" data-toggle="modal" data-target="#confirm-delete">
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

        </div>

@endsection

