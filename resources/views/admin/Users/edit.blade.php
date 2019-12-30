@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">لالصفحة الرئيسية</a>
  </li>
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/users') }}">Users</a>
  </li>
  <li class="breadcrumb-item active">Edit User Data</li>
</ol>
@endsection


@section('content')

<!-- DataTables Example -->

        <div class="card mb-3">
          <div class="card-header">
            	<i class="fas fa-table"></i> Edit User Data
        	</div>
          <div class="card-body">
              
              {!! Form::open( array('url' => 'admin/users/update', 'method' => 'put')) !!}
              
              {!! Form::hidden('id',$data->id) !!}
              <div class="form-group">
                    {!! Form::label('name', 'Full NAme') !!}
                    {!! Form::text('name',$data->name,['class'=>'form-control', 'placeholder'=>'Enter The Full name']) !!}
              </div>
              <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::textarea('email',$data->email,['class'=>'form-control', 'rows'=>'3','placeholder'=>'Enter The email']) !!}
              </div>
              <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::text('password',$data->password,['class'=>'form-control', 'placeholder'=>'Enter The password']) !!}
                   <!--  {!! Form::hidden('passwordOld',$data->password,['class'=>'form-control', 'placeholder'=>'Enter The password']) !!} -->
              </div>
              
              <br>
              <div class="form-group">
              {!! Form::submit('Edit user', array('class'=>'btn btn-primary')) !!}
              </div>
              
              {!! Form::close() !!}
              
          </div>
        </div>

@endsection

