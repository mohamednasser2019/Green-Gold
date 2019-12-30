@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">لصفحة الرئيسية </a>
  </li>
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/products') }}">Products</a>
  </li>
  <li class="breadcrumb-item active">Edit Product Data</li>
</ol>
@endsection


@section('content')


        <div class="card mb-3">
          <div class="card-header">
            	<i class="fas fa-table"></i> Edit Product Data
        	</div>
          <div class="card-body">
              
              {!! Form::model($data, ['route' => ['products.update',$data->id] , 'method'=>'put' ,'files'=> true]) !!}
              <br>
<div class="row">
                          <div class="col-md-12">
                            <h3>Account Info</h3>
                            <hr>
                          </div>
<div class="col-md-6">
        <div class="form-group">
          <label class="control-label">
            Product Name
          </label>
         {!! Form::text('product_name',$data->product_name,['class'=>'form-control', 'placeholder'=>'Enter The product name']) !!}
        </div>
        <div class="form-group">
          <label class="control-label">
            Product Name
          </label>
         {!! Form::text('benefits_of_use',$data->benefits_of_use,['class'=>'form-control', 'placeholder'=>'Enter The benefits of use']) !!}
        </div><div class="form-group">
          <label class="control-label">
            Product Name
          </label>
         {!! Form::text('usage_rates',$data->usage_rates,['class'=>'form-control', 'placeholder'=>'Enter The usage rates']) !!}
        </div><div class="form-group">
          <label class="control-label">
            Product Name
          </label>
         {!! Form::text('packaging',$data->packaging,['class'=>'form-control', 'placeholder'=>'Enter The packaging']) !!}
        </div><div class="form-group">
          <label class="control-label">
            Product Name
          </label>
         {!! Form::text('aboutProduct',$data->aboutProduct,['class'=>'form-control', 'placeholder'=>'Enter anything about Product']) !!}
        </div>
                            <div class="form-group">
                              <label class="control-label">
                                Category
                              </label>
                {!! Form::select('category_id', $categories, null, ['class'=>'form-control',null]) !!}
                            </div>
                          </div>
                          <div class="col-md-6">
                           

                    <div class="form-group">
                      <label>
                        Product Image
                      </label>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail"><img  src="{{ asset('public/uploads/Products_Images/'.$data->product_img) }}" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail"></div>
                        <div class="user-edit-image-buttons">
                          <span class="btn btn-azure btn-file">
                            <span class="fileupload-new " ><i class="fa fa-picture "></i> Change image</span>

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

