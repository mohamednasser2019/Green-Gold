@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">Dashboard</a>
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
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updates At</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updates At</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                	
                   @foreach($data as $row)
                    <tr>
                      <td>{{ $row->id }}</td>
                      <td>{{ $row->name }}</td>
                      <td>{{ $row->created_at->format('Y-d-m') }}</td>
                      <td>{{ $row->updated_at->format('Y-d-m') }}</td>
                      <td>
                        <a href="{{ URL::to('admin/categories/'.$row->id.'/edit') }}" class="btn btn-info btn-sm">Edit</a>
                        <a class="btn btn-danger btn-sm" data-href="{{ URL::to('admin/categories/'.$row->id.'/delete') }}" data-toggle="modal" data-target="#confirm-delete" style="color: #FFF">Delete</a>
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

