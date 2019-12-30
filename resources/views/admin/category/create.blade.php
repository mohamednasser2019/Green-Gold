@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">الصفحة الرئيسية </a>
  </li>
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/categories') }}">Categories</a>
  </li>
  <li class="breadcrumb-item active">Add New Category</li>
</ol>
@endsection


@section('content')

        <div class="card mb-3">
          <div class="card-header">
            	<i class="fas fa-table"></i> Add New Category
        	</div>
          <div class="card-body">
              {!! Form::open(['url' => 'admin/categories']) !!}

              <div class="form-group">
                    {!! Form::label('category_name', 'Category Name') !!}
                    {!! Form::text('category_name',null,['class'=>'form-control', 'placeholder'=>'Enter The Name']) !!}
              </div>

              <br>
              <div class="form-group">
              {!! Form::submit('Add Data', array('class'=>'btn btn-primary')) !!}
              </div>
              
              {!! Form::close() !!}
              
          </div>
        </div>

@endsection

