@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">للصفحة الرئيسية </a>
  </li>
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/configrations') }}">Configrations</a>
  </li>
  <li class="breadcrumb-item active">Edit Configration Data</li>
</ol>
@endsection


@section('content')


        <div class="card mb-3">
          <div class="card-header">
            	<i class="fas fa-table"></i> Edit Configration Data
        	</div>
          <div class="card-body">
              
              <!-- !! Form::model($data, ['route' => ['configrations.update',$data->id] , 'method'=>'put' ,'files'=> true]) !!} -->

              {!! Form::open( ['url' => 'admin/configrations/update', 'method' => 'put' , 'files'=> true]) !!}

              {!! Form::hidden('id', 1) !!}

<div class="row">
              <div class="col-md-6 col-lg-3 col-sm-6">
           <div class="form-group">
                      <label>
                       Page logo
                      </label>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail"><img  src="{{ asset('public/uploads/main_Page/'.$data->logo) }}" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail"></div>
                        <div class="user-edit-image-buttons">
                          <span class="btn btn-azure btn-file">
                            <span class="fileupload-new " ><i class="fa fa-picture "></i> Change image</span>

                            {{ Form::file('logo',array('accept'=>'image/*','class'=>'form-control')) }}
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
      <div class="col-md-6 col-lg-3 col-sm-6">
               <div class="form-group">
                      <label>
                       intro image
                      </label>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail"><img  src="{{ asset('public/uploads/main_Page/'.$data->intro_image) }}" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail"></div>
                        <div class="user-edit-image-buttons">
                          <span class="btn btn-azure btn-file">
                            <span class="fileupload-new " ><i class="fa fa-picture "></i> Change image</span>

                            {{ Form::file('intro_image',array('accept'=>'image/*','class'=>'form-control')) }}
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

      <div class="col-md-6 col-lg-3 col-sm-6">
     <div class="form-group">
                      <label>
                       service image
                      </label>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail"><img  src="{{ asset('public/uploads/main_Page/'.$data->service_image) }}" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail"></div>
                        <div class="user-edit-image-buttons">
                          <span class="btn btn-azure btn-file">
                            <span class="fileupload-new " ><i class="fa fa-picture "></i> Change image</span>

                            {{ Form::file('service_image',array('accept'=>'image/*','class'=>'form-control')) }}
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
                    {!! Form::label('appointment_intro', 'appointment intro') !!}
                    {!! Form::textarea('appointment_intro',$data->phone,['class'=>'form-control', 'placeholder'=>'Enter The intro']) !!}
              </div>
                <div class="form-group">
                {!! Form::label('about', 'about us') !!}
                {!! Form::textarea('about',$data->about,['class'=>'form-control', 'placeholder'=>'Enter The about description ..', 'rows'=>5]) !!}
              </div>
               <div class="form-group">
                    {!! Form::label('address', 'address') !!}
                    {!! Form::text('address',$data->address,['class'=>'form-control', 'placeholder'=>'Enter The address']) !!}
              </div>
               <div class="form-group">
                    {!! Form::label('working_time', 'working time') !!}
                    <div class="input-group">
                      <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                      {!! Form::text('working_time',$data->working_time,['class'=>'form-control date-time-range', 'placeholder'=>'Enter The working time']) !!}
                    </div>
              </div>

              
              <div class="form-group">
                    {!! Form::label('phone', 'Phone') !!}
                    {!! Form::text('phone',$data->phone,['class'=>'form-control', 'rows'=>'3','placeholder'=>'Enter The phone']) !!}
              </div>
              <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email',$data->email,['class'=>'form-control', 'placeholder'=>'Enter The Email']) !!}
              </div>
<div class="row">
   <div class="col-md-6 col-lg-3 col-sm-6">
              <div class="form-group">
                {!! Form::label('facebook', 'Facebook') !!}
                
              <span class="input-icon">
  {!! Form::text('facebook',$data->facebook,['class'=>'form-control', 'placeholder'=>'Enter The Name']) !!}<i class="fa fa-facebook"></i> </span>

              </div>
     </div>
     <div class="col-md-6 col-lg-3 col-sm-6">
              <div class="form-group">
                {!! Form::label('twitter', 'Twitter') !!}

<span class="input-icon">
  {!! Form::text('twitter',$data->twitter,['class'=>'form-control', 'placeholder'=>'Enter The twitter Link']) !!}<i class="fa fa-twitter"></i> </span>

                
              </div>
     </div>
     <div class="col-md-6 col-lg-3 col-sm-6">
               <div class="form-group">
                {!! Form::label('google', 'Google') !!}
                

                <span class="input-icon">
  {!! Form::text('google',$data->google,['class'=>'form-control', 'placeholder'=>'Enter The google link']) !!}<i class="fa fa-google"></i> </span>
              </div>
     </div>
            </div>
              <br>
              <div class="form-group">
              {!! Form::submit('Save Changes', array('class'=>'btn btn-primary')) !!}
              </div>
              
              {!! Form::close() !!}
              
          </div>
        </div>

@endsection

