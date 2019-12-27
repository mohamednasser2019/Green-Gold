@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">Dashboard</a>
  </li>
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/categories') }}">Categories</a>
  </li>
  <li class="breadcrumb-item active">Add New Category</li>
</ol>
@endsection


@section('content')

<!-- DataTables Example -->
		<div style="margin-bottom: 10px;">
			<a href="{{ URL::to('admin/categories') }}" class="btn btn-danger btn-sm">Return Back</a>
		</div>
        <div class="card mb-3">
          <div class="card-header">
            	<i class="fas fa-table"></i> Add New Record
        	</div>
          <div class="card-body">
              {!! Form::open(['url' => 'admin/categories']) !!}

              <div class="form-group">
                    {!! Form::label('name', 'Category Name') !!}
                    {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Enter The Name']) !!}
              </div>

              <br>
              <div class="form-group">
              {!! Form::submit('Add Data', array('class'=>'btn btn-primary')) !!}
              </div>
              
              {!! Form::close() !!}
              
          </div>
        </div>

@endsection

