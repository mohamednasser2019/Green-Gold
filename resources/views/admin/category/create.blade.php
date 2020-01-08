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
              {!! Form::open(['url' => 'admin/categories', 'files'=>true]) !!}
 <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">
                            {{trans('arabic_trans.tbl_cat_image')}}
                        </label>
   <div class="form-group">
                {{ Form::file('category_img',array('accept'=>'image/*','class'=>'form-control')) }}
            </div>
                      </div>
         
            
              <div class="form-group">

                 <label class="col-sm-2 control-label" for="form-field-1">
                            {{trans('arabic_trans.tbl_cat_name')}}
                        </label>

                     {!! Form::text('category_name',null,['class'=>'form-control']) !!}
              </div>

              <br>
              <div class="form-group">
              {!! Form::submit('Add Data', array('class'=>'btn btn-primary')) !!}
              </div>

              {!! Form::close() !!}

          </div>
        </div>

@endsection

