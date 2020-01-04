@extends('admin_temp')

@section('navbar')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/home') }}">{{trans('arabic_trans.index_title')}}</a>
        </li>
        <li class="breadcrumb-item active">{{trans('arabic_trans.index_users')}}</li>
    </ol>
@endsection

@section('content')

    <!-- DataTables Example -->
    <div style="margin-bottom: 10px;">
        <a href="{{URL::to('admin/users/create')}}" class="btn btn-primary btn-sm">Add New user</a>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> {{trans('arabic_trans.index_users_data')}}
        </div>

        <!-- start: TABLE WITH IMAGES PANEL -->
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
                                <a class="panel-refresh" href="{{ URL::to('admin/users') }}"> <i
                                        class="fa fa-refresh"></i> <span>Refresh</span> </a>
                            </li>

                            <li>
                                <a class="panel-expand" href="#"> <i class="fa fa-expand"></i>
                                    <span>Fullscreen</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> -->
                </div>
            </div>
            <div class="panel-body">


                <table class="table table-striped table-hover" id="sample-table-2">
                    <thead>
                    <tr>
                        <th class="center">
                            <div class="checkbox-table">
                                <label>
                                    <input type="checkbox" class="flat-grey selectall">
                                </label>
                            </div>
                        </th>
                         <th>#</th>
                        <th> {{trans('arabic_trans.tbl_users_FullName')}}</th>
                        <th class="hidden-xs">{{trans('arabic_trans.tbl_users_Email')}}</th>
                        <th class="hidden-xs">{{trans('arabic_trans.tbl_users_createdAt')}}</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
<?php $i=1; ?>
                    @foreach($data as $row)
                        <tr>
                            <td class="center">
                                <div class="checkbox-table">
                                    <label>
                                        <input type="checkbox" class="flat-grey foocheck">
                                    </label>
                                </div>
                            </td>
   <td><?php echo $i; ?></td>
                      <?php $i++; ?>
                            <td>{{ $row->name }}</td>
                            <td class="hidden-xs">{{ $row->email}}</td>
                            <td class="hidden-xs">{{ $row->created_at->format('Y-d-m') }}</td>

                            <td class="center">
                                <div class="visible-md visible-lg hidden-sm hidden-xs">
                                    <a href="{{ URL::to('admin/users/'.$row->id.'/edit') }}"
                                       class="btn btn-xs btn-blue tooltips" data-placement="top"
                                       data-original-title="تعديل"><i class="fa fa-edit"></i></a>

                                    <a class="btn btn btn-xs btn-red tooltips"
                                       data-href="{{ URL::to('admin/users/'.$row->id.'/delete') }}" data-toggle="modal"
                                       data-target="#confirm-delete" style="color: #FFF" data-original-title="حذف"><i
                                            class="fa fa-times fa fa-white"> </i> </a>

                                </div>
                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                    <div class="btn-group">
                                        <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                            <i class="fa fa-cog"></i> <span class="caret"></span>
                                        </a>
                                        <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                                            <li>
                                                <a role="menuitem" tabindex="-1"
                                                   href="{{ URL::to('admin/users/'.$row->id.'/edit') }}">
                                                    <i class="fa fa-edit">

                                                    </i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a role="menuitem" tabindex="-1"
                                                   data-href="{{ URL::to('admin/users/'.$row->id.'/delete') }}"
                                                   data-toggle="modal" data-target="#confirm-delete">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection

