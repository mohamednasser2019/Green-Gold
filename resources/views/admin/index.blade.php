@extends('admin_temp')

@section('navbar')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">{{trans('arabic_trans.index_title')}}</a>
        </li>
        <li class="breadcrumb-item active">{{trans('arabic_trans.index_overview')}}</li>
    </ol>
@endsection

@section('content')
    <div class="panel panel-white">
        <div class="panel-heading">
            <div class="panel-tools">
                <div class="dropdown">
                    <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                        <i class="fa fa-cog"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                        <li>
                            <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i>
                                <span>{{trans('arabic_trans.index_collapse')}}</span> </a>
                        </li>
                        <li>
                            <a class="panel-refresh" href="">
                                <i class="fa fa-refresh"></i> <span>{{trans('arabic_trans.index_refresh')}}</span>
                            </a>
                        </li>

                        <li>
                            <a class="panel-expand" href="#">
                                <i class="fa fa-expand"></i> <span>{{trans('arabic_trans.index_fullscreen')}}</span>
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


            <div class="row">

                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">{{ count($data['user']) }} {{trans('arabic_trans.index_users')}}</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{ URL::to('admin/users') }}">
                            <span class="float-left">{{trans('arabic_trans.index_details')}}</span>
                            <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-shopping-cart"></i>
                            </div>
                            <div
                                class="mr-5">{{ count($data['product']) }} {{trans('arabic_trans.index_products')}}</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{ URL::to('admin/products') }}">
                            <span class="float-left">{{trans('arabic_trans.index_details')}}</span>
                            <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-life-ring"></i>
                            </div>
                            <div
                                class="mr-5">{{ count($data['category']) }}  {{trans('arabic_trans.index_categories')}}</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{ URL::to('admin/categories') }}">
                            <span class="float-left">{{trans('arabic_trans.index_details')}}</span>
                            <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                        </a>
                    </div>
                </div>
            </div>

        <!-- <img  src="{{ asset('public/uploads/Admin_page/Admin_intro.jpg') }}" alt="">
 -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i> {{trans('arabic_trans.index_categories')}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <th>{{trans('arabic_trans.tbl_cat_Id')}}</th>
                            <th>{{trans('arabic_trans.tbl_cat_name')}}</th>
                            <th>{{trans('arabic_trans.created_at')}}</th>
                            <th>{{trans('arabic_trans.updated_at')}}</th>
                            <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>{{trans('arabic_trans.tbl_cat_Id')}}</th>
                                <th>{{trans('arabic_trans.tbl_cat_name')}}</th>
                                <th>{{trans('arabic_trans.created_at')}}</th>
                                <th>{{trans('arabic_trans.updated_at')}}</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>

                            @foreach($data['category'] as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->category_name }}</td>
                                    <td>{{ $row->created_at->format('Y-d-m') }}</td>
                                    <td>{{ $row->updated_at->format('Y-d-m') }}</td>


                                    <td class="center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <a href="{{ URL::to('admin/categories/'.$row->id.'/edit') }}"
                                               class="btn btn-xs btn-blue tooltips" data-placement="top"
                                               data-original-title="{{trans('arabic_trans.edit')}}"><i
                                                    class="fa fa-edit"></i></a>

                                            <a class="btn btn btn-xs btn-red tooltips"
                                               data-href="{{ URL::to('admin/categories/'.$row->id.'/delete') }}"
                                               data-toggle="modal" data-target="#confirm-delete" style="color: #FFF"
                                               data-original-title="{{trans('arabic_trans.delete')}}"><i
                                                    class="fa fa-times fa fa-white"> </i> </a>

                                        </div>
                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                            <div class="btn-group">
                                                <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown"
                                                   href="#">
                                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                                </a>
                                                <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                                                    <li>
                                                        <a role="menuitem" tabindex="-1"
                                                           href="{{ URL::to('admin/categories/'.$row->id.'/edit') }}">
                                                            <i class="fa fa-edit">

                                                            </i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a role="menuitem" tabindex="-1"
                                                           data-href="{{ URL::to('admin/categories/'.$row->id.'/delete') }}"
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
        </div>
    </div>
@endsection
