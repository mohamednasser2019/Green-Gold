@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">لصفحة الرئيسية </a>
  </li>
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/products') }}">Products</a>
  </li>
  <li class="breadcrumb-item active">Add New Product</li>
</ol>
@endsection


@section('content')


        <div class="card mb-3">
          <div class="card-header">
            	<i class="fas fa-table"></i> Add New Product
        	</div>
          <div class="card-body">
              {!! Form::open(['url' => 'admin/products', 'files'=>true]) !!}

              <div class="form-group">
                {!! Form::label('product_img', 'Product Avatar') !!}
                {{ Form::file('product_img',array('accept'=>'image/*','class'=>'form-control')) }}
              </div>

              <div class="form-group">
                {!! Form::label('category_id', 'Product Category') !!}
                {!! Form::select('category_id', $categories, null, ['class'=>'form-control','placeholder' => 'Pick a Category...']) !!}

              </div>
              <div class="form-group">
                {!! Form::label('product_name', 'Product Name') !!}
                {!! Form::text('product_name',null,['class'=>'form-control', 'placeholder'=>'Enter product name']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('benefits_of_use', 'Benefits of use') !!}
                {!! Form::text('benefits_of_use',null,['class'=>'form-control', 'placeholder'=>'Enter The benefits of use']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('usage_rates', 'Usage rates') !!}
                {!! Form::text('usage_rates',null,['class'=>'form-control', 'placeholder'=>'Enter usage rates']) !!}
              </div>


              <div class="form-group">
                {!! Form::label('aboutProduct', 'About Product') !!}
                {!! Form::text('aboutProduct',null,['class'=>'form-control', 'placeholder'=>'Enter About Product']) !!}
              </div>
              

              <br>
              <div class="form-group">
              {!! Form::submit('Add Data', array('class'=>'btn btn-primary')) !!}
              </div>
              
              {!! Form::close() !!}
              
          </div>
        </div>

@endsection

