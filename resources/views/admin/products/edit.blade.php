@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">Dashboard</a>
  </li>
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/products') }}">Members</a>
  </li>
  <li class="breadcrumb-item active">Edit Member Data</li>
</ol>
@endsection


@section('content')

<!-- DataTables Example -->
		<div style="margin-bottom: 10px;">
			<a href="{{ URL::to('members') }}" class="btn btn-danger btn-sm">Return Back</a>
		</div>
        <div class="card mb-3">
          <div class="card-header">
            	<i class="fas fa-table"></i> Edit Member Data
        	</div>
          <div class="card-body">
              
              {!! Form::model($data, ['route' => ['members.update',$data->id] , 'method'=>'put' ,'files'=> true]) !!}
              <br>
<div class="row">
                          <div class="col-md-12">
                            <h3>Account Info</h3>
                            <hr>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">
                                Member Name
                              </label>
                             {!! Form::text('name',$data->name,['class'=>'form-control', 'placeholder'=>'Enter The Name']) !!}
                            </div>
                            <div class="form-group">
                              <label class="control-label">
                                Category
                              </label>
                           <!--   {!! Form::text('Category',$data->getCategory->name,['class'=>'form-control', 'placeholder'=>'Enter The Name']) !!}


                              {!! Form::label('type', 'Category') !!}
                    {!! Form::select('type', ['feature' => 'Feature', 'service' => 'Service'], $data->type, ['class'=>'form-control','placeholder' => 'Pick a Type...']) !!}

 -->
                    {!! Form::label('category', 'Member Category') !!}
                {!! Form::select('category_id', $categories, null, ['class'=>'form-control',null]) !!}
                            </div>
                          </div>
                          <div class="col-md-6">
                           

                    <div class="form-group">
                      <label>
                        Member Image
                      </label>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail"><img  src="{{ asset('public/uploads/avatars/'.$data->avatar) }}" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail"></div>
                        <div class="user-edit-image-buttons">
                          <span class="btn btn-azure btn-file">
                            <span class="fileupload-new " ><i class="fa fa-picture "></i> Change image</span>

                            {{ Form::file('avatar',array('accept'=>'image/*','class'=>'form-control')) }}
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

