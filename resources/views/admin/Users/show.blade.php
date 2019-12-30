@extends('admin_temp')

@section('navbar')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/home') }}">الصفحة الرئيسية</a>
  </li>
  <li class="breadcrumb-item">
    <a href="{{ URL::to('admin/features') }}">Featreus</a>
  </li>
  <li class="breadcrumb-item active">Show Feature Data</li>
</ol>
@endsection


@section('content')

<!-- DataTables Example -->
		<div style="margin-bottom: 10px;">
			<a href="{{ URL::to('admin/features') }}" class="btn btn-danger btn-sm">Return Back</a>
		</div>
        <div class="card mb-3">
          <div class="card-header">
            	<i class="fas fa-search"></i> Preview Feature Data
        	</div>
          <div class="card-body">
             
            <h2>Title : {{ $data->title }}</h2>
            <p>Description : {{ $data->desc }}</p>
            <p>Icon : <i class="{{ $data->icon }}"></i></p>
            <p>Type : {{ $data->type }}</p>
          </div>
        </div>

@endsection

