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

            {!! Form::model($data, ['route' => ['categories.update',$data->id] , 'method'=>'PUT','files'=> true]) !!}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('name', trans('arabic_trans.tbl_cat_name')) !!}

                        {!! Form::text('category_name',$data->name,['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>
                            {{trans('arabic_trans.tbl_cat_image')}}
                        </label>
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail"><img
                                    src="{{ $data->category_img }}" alt="">
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail"></div>
                            <div class="user-edit-image-buttons">
                          <span class="btn btn-azure btn-file">
                            <span class="fileupload-new "><i class="fa fa-picture "></i> Change image</span>

                            {{ Form::file('category_img',array('accept'=>'image/*','class'=>'form-control')) }}
                          <span class="fileupload-exists "><i class="fa fa-picture"></i> Change</span>
                            <input type="file">
                          </span>
                                <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">
                                    <i class="fa fa-times"></i> Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="form-group">
                {!! Form::submit('Edit Data', array('class'=>'btn btn-primary')) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection

