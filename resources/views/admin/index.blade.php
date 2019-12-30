@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">الصفحة الرئيسية</a>
  </li>
  <li class="breadcrumb-item active">Overview</li>
</ol>
@endsection

@section('content')


        <!-- Icon Cards-->
        


<div class="panel panel-white">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Welcom <span class="text-bold">{{ auth()->user()->name}}</span></h4>
                                        <div class="panel-tools">
                                            <div class="dropdown">
                                                <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                    <i class="fa fa-cog"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                    <li>
                                                        <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                                    </li>
                                                    <li>
                                                        <a class="panel-refresh" href="">
                                                            <i class="fa fa-refresh"></i> <span>Refresh</span>
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


<div class="row">
       
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">{{ count($data['user']) }} Users!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{ URL::to('admin/users') }}">
                <span class="float-left">View Details</span>
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
                <div class="mr-5">{{ count($data['product']) }} Products!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{ URL::to('admin/products') }}">
                <span class="float-left">View Details</span>
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
                <div class="mr-5">{{ count($data['category']) }} Categories!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{ URL::to('admin/categories') }}">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

<!-- <img  src="{{ asset('public/uploads/Admin_page/Admin_intro.jpg') }}" alt="">
 -->  <div class="card mb-3">
          <div class="card-header">
              <i class="fas fa-table"></i> All Categories Data
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updates At</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updates At</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  
                   @foreach($data['category'] as $row)
                    <tr>
                      <td>{{ $row->category_name }}</td>
                      <td>{{ $row->created_at->format('Y-d-m') }}</td>
                      <td>{{ $row->updated_at->format('Y-d-m') }}</td>
                


                       <td class="center">
                          <div class="visible-md visible-lg hidden-sm hidden-xs">
                            <a href="{{ URL::to('admin/categories/'.$row->id.'/edit') }}" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="تعديل"><i class="fa fa-edit"></i></a>

                        <a class="btn btn btn-xs btn-red tooltips" data-href="{{ URL::to('admin/categories/'.$row->id.'/delete') }}" data-toggle="modal" data-target="#confirm-delete" style="color: #FFF" data-original-title="حذف"><i class="fa fa-times fa fa-white">  </i> </a>

                          </div>
                          <div class="visible-xs visible-sm hidden-md hidden-lg">
                            <div class="btn-group">
                              <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i> <span class="caret"></span>
                              </a>
                              <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                                <li>
                                  <a role="menuitem" tabindex="-1" href="{{ URL::to('admin/categories/'.$row->id.'/edit') }}">
                                    <i class="fa fa-edit">

                                    </i> Edit
                                  </a>
                                </li>
                                <li>
                                  <a role="menuitem" tabindex="-1" data-href="{{ URL::to('admin/categories/'.$row->id.'/delete') }}" data-toggle="modal" data-target="#confirm-delete">
                                    <i class="fa fa-times"></i> Remove
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div></td>
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
