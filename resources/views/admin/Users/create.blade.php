@extends('admin_temp')

@section('navbar')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/home') }}">لالصفحة الرئيسية</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/users') }}">Users</a>
        </li>
        <li class="breadcrumb-item active">Register New user</li>
    </ol>
@endsection
@section('content')
    <!-- DataTables Example -->

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Add New User
        </div>
        <!-- start: TEXT FIELDS PANEL -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <div class="panel-tools">
                    <div class="dropdown">
                        <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                            <i class="fa fa-cog"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                            <li>
                                <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span>
                                </a>
                            </li>
                            <li>
                                <a class="panel-refresh" href="#">
                                    <i class="fa fa-refresh"></i> <span>Refresh</span>
                                </a>
                            </li>
                            <li>
                                <a class="panel-config" href="#panel-config" data-toggle="modal">
                                    <i class="fa fa-wrench"></i> <span>Configurations</span>
                                </a>
                            </li>
                            <li>
                                <a class="panel-expand" href="#">
                                    <i class="fa fa-expand"></i> <span>Fullscreen</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-xs btn-link panel-close" href="#">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">

                <form role="form" class="form-horizontal" method="POST" action="{{ URL::to('admin/users') }}">
                    @csrf

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">
                            {{trans('arabic_trans.tbl_users_FullName')}}
                        </label>

                        <div class="col-md-6">
                                                     <span class="input-icon">
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                       required autofocus><i class="fa fa-user"></i> </span>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">
                            {{trans('arabic_trans.tbl_users_Email')}}

                        </label>

                        <div class="col-md-6">
                                                     <span class="input-icon">
                                <input id="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       required><i class="fa  fa-envelope-o"></i> </span>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">
                            {{trans('arabic_trans.tbl_users_Password')}}

                        </label>

                        <div class="col-md-6">
                                                     <span class="input-icon">
                               <input id="password" type="password"
                                      class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                      name="password" required><i class="fa fa-lock"></i>  </span>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">
                            {{trans('arabic_trans.tbl_users_confirm')}}

                        </label>

                        <div class="col-md-6">
                                                     <span class="input-icon">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required><i class="fa fa-lock"></i> </span>


                        </div>
                    </div>

                    <div class="col-md-4 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Add new
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end: TEXT FIELDS PANEL -->
    </div>

@endsection

