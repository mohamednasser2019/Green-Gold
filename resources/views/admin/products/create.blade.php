@extends('admin_temp')

@section('navbar')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/home') }}"> {{trans('arabic_trans.index_title')}} </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/products') }}">{{trans('arabic_trans.index_products')}}</a>
        </li>
        <li class="breadcrumb-item active">{{trans('arabic_trans.products_create')}}</li>
    </ol>
@endsection


@section('content')


    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> {{trans('arabic_trans.products_create')}}
        </div>
        <div class="card-body">
            {!! Form::open(['url' => 'admin/products', 'files'=>true]) !!}

            <div class="form-group">
                {{ Form::file('product_img',array('accept'=>'image/*','class'=>'form-control')) }}
            </div>

            <div class="form-group">
                {!! Form::select('category_id', $categories, null, ['class'=>'form-control','placeholder' => trans('arabic_trans.create_product_cat_hint')]) !!}

            </div>
            <div class="form-group">
                {!! Form::text('product_name',null,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_product_name')]) !!}
            </div>

            <div class="form-group">
                {!! Form::textArea('benefits_of_use',null,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_product_Benefits')]) !!}
            </div>

            <div class="form-group">
                {!! Form::textArea('usage_rates',null,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_product_usage_rates')]) !!}
            </div>


            <div class="form-group">
                {!! Form::textArea('aboutProduct',null,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_product_about')]) !!}
            </div>
            <div class="form-group">
                {!! Form::textArea('packaging',null,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_product_packaging')]) !!}
            </div>

            <br>
            <div class="form-group">
                {!! Form::submit('Add Data', array('class'=>'btn btn-primary')) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection

