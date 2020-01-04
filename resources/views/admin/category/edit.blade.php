@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ URL::to('admin/home') }}">{{trans('arabic_trans.index_title')}}</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ URL::to('admin/categories') }}">{{trans('arabic_trans.index_categories')}}</a>
    </li>
  <li class="breadcrumb-item active">{{trans('arabic_trans.index_categories_edit')}}</li>
</ol>
@endsection


@section('content')

<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            	<i class="fas fa-table"></i> {{trans('arabic_trans.index_categories_edit')}}
        	</div>
          <div class="card-body">

              {!! Form::model($data, ['route' => ['categories.update',$data->id] , 'method'=>'PUT']) !!}

              <div class="form-group">
                     {!! Form::text('category_name',$data->name,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_cat_name')]) !!}
              </div>
              <br>
              <div class="form-group">
              {!! Form::submit('Edit Data', array('class'=>'btn btn-primary')) !!}
              </div>

              {!! Form::close() !!}

          </div>
        </div>

@endsection

