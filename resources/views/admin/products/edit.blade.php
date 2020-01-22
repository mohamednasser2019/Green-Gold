@extends('admin_temp')

@section('navbar')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/home') }}"> {{trans('arabic_trans.index_title')}} </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/products') }}">{{trans('arabic_trans.index_products')}}</a>
        </li>
        <li class="breadcrumb-item active">{{trans('arabic_trans.index_products_edit')}}</li>
    </ol>
@endsection


@section('content')


    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> {{trans('arabic_trans.index_products_edit')}}
        </div>
        <div class="card-body">

            {!! Form::model($data, ['route' => ['products.update',$data->id] , 'method'=>'put' ,'files'=> true]) !!}
            <br>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">
                            {{trans('arabic_trans.tbl_product_name')}}
                        </label>
                        {!! Form::text('product_name',$data->product_name,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_product_name')]) !!}
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            {{trans('arabic_trans.tbl_product_Benefits')}}
                        </label>
                        {!! Form::textArea('benefits_of_use',$data->benefits_of_use,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_product_Benefits')]) !!}
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            {{trans('arabic_trans.tbl_product_usage_rates')}}
                        </label>
                        {!! Form::textArea('usage_rates',$data->usage_rates,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_product_usage_rates')]) !!}
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            {{trans('arabic_trans.tbl_product_packaging')}}
                        </label>
                        {!! Form::textArea('packaging',$data->packaging,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_product_packaging')]) !!}
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                           {{trans('arabic_trans.tbl_product_about')}}
                        </label>
                        {!! Form::textArea('aboutProduct',$data->aboutProduct,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_product_about')]) !!}
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            {{trans('arabic_trans.tbl_product_cat')}}
                        </label>
                        {!! Form::select('category_id', $categories, null, ['class'=>'form-control',null]) !!}
                    </div>
                </div>
                <div class="col-md-6">


                    <div class="form-group">
                        <label>
                            {{trans('arabic_trans.tbl_product_img')}}
                        </label>
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail"><img
                                    src="{{ $data->product_img }}" alt="">
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail"></div>
                            <div class="user-edit-image-buttons">
                          <span class="btn btn-azure btn-file">
                            <span class="fileupload-new "><i class="fa fa-picture "></i> Change image</span>

                            {{ Form::file('product_img',array('accept'=>'image/*','class'=>'form-control')) }}
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


            <div class="form-group">
                {!! Form::submit('Save Data', array('class'=>'btn btn-primary')) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection

