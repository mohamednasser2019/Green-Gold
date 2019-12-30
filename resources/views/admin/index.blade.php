@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
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

<img  src="{{ asset('public/uploads/Admin_page/Admin_intro.jpg') }}" alt="">
</div>
                                    </div>

                                 



@endsection
