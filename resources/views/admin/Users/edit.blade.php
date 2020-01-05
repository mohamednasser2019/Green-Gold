@extends('admin_temp')

@section('navbar')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/home') }}">{{trans('arabic_trans.index_title')}}</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/users') }}">{{trans('arabic_trans.index_users')}}</a>
        </li>
        <li class="breadcrumb-item active">{{trans('arabic_trans.index_users_edit')}}</li>
    </ol>
@endsection


@section('content')

    <!-- DataTables Example -->

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>{{trans('arabic_trans.index_users_edit')}}
        </div>
        <div class="card-body">

            {!! Form::open( array('url' => 'admin/users/update', 'method' => 'put')) !!}

            {!! Form::hidden('id',$data->id) !!}
            <div class="form-group">
                {!! Form::label('name', trans('arabic_trans.tbl_users_FullName')) !!}
                {!! Form::text('name',$data->name,['class'=>'form-control','placeholder'=>trans('arabic_trans.tbl_The_Enter_Full_name')] ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', trans('arabic_trans.tbl_users_Email')) !!}
                {!! Form::text('email',$data->email,['class'=>'form-control', 'rows'=>'3','placeholder'=>trans('arabic_trans.tbl_users_Email')]) !!}
            </div>
            <div class="form-group">

            {!! Form::password('password',$data->password,['class'=>'form-control','type'=>'password' ,'placeholder'=>trans('arabic_trans.tbl_users_Enterpassword')]) !!}
             </div>

            <br>
            <div class="form-group">
                {!! Form::submit('Edit user', array('class'=>'btn btn-primary')) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection

