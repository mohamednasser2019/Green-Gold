@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">Dashboard</a>
  </li>
  <li class="breadcrumb-item">
    <a href="{{ route('categories.index') }}">Categories</a>
  </li>
  <li class="breadcrumb-item active">Edit Category Data</li>
</ol>
@endsection


@section('content')

<!-- DataTables Example -->
		<div style="margin-bottom: 10px;">
			<a href="{{ URL::to('admin/categories') }}" class="btn btn-danger btn-sm">Return Back</a>
		</div>
        <div class="card mb-3">
          <div class="card-header">
            	<i class="fas fa-table"></i> Edit Category Data
        	</div>
          <div class="card-body">
              
              {!! Form::model($data, ['route' => ['categories.update',$data->id] , 'method'=>'PUT']) !!}
              
              <div class="form-group">
                    {!! Form::label('category_name', 'Category Name') !!}
                    {!! Form::text('category_name',$data->name,['class'=>'form-control', 'placeholder'=>'Enter The Name']) !!}
              </div>
              <br>
              <div class="form-group">
              {!! Form::submit('Edit Data', array('class'=>'btn btn-primary')) !!}
              </div>
              
              {!! Form::close() !!}
              
          </div>
        </div>

@endsection

