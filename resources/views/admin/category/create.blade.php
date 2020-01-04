@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">{{trans('arabic_trans.index_title')}}</a>
  </li>
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/categories') }}">{{trans('arabic_trans.index_categories')}}</a>
  </li>
  <li class="breadcrumb-item active">{{trans('arabic_trans.categories_create')}}</li>
</ol>
@endsection


@section('content')

        <div class="card mb-3">
          <div class="card-header">
            	<i class="fas fa-table"></i> {{trans('arabic_trans.categories_create')}}
        	</div>
          <div class="card-body">
              {!! Form::open(['url' => 'admin/categories']) !!}

              <div class="form-group">
                     {!! Form::text('category_name',null,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_cat_name')]) !!}
              </div>

              <br>
              <div class="form-group">
              {!! Form::submit('Add Data', array('class'=>'btn btn-primary')) !!}
              </div>

              {!! Form::close() !!}

          </div>
        </div>

@endsection

