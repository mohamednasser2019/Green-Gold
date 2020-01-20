@extends('admin_temp')

@section('navbar')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/home') }}">{{trans('arabic_trans.index_title')}}</a>
        </li>
        <li class="breadcrumb-item active">{{trans('arabic_trans.index_categories')}}</li>
    </ol>
@endsection


@section('content')

    <!-- DataTables Example -->
    <div style="margin-bottom: 10px;">
        <a href="{{ URL::to('admin/categories/create') }}"
           class="btn btn-primary btn-sm">{{trans('arabic_trans.categories_create')}}</a>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>{{trans('arabic_trans.categories_pnl_header')}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <th>{{trans('arabic_trans.tbl_cat_Id')}}</th>
                    <th>{{trans('arabic_trans.tbl_cat_image')}}</th>
                    <th>{{trans('arabic_trans.tbl_cat_name')}}</th>
                    <th>{{trans('arabic_trans.created_at')}}</th>
                    <th>{{trans('arabic_trans.updated_at')}}</th>
                    <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>{{trans('arabic_trans.tbl_cat_Id')}}</th>
                        <th>{{trans('arabic_trans.tbl_cat_image')}}</th>
                        <th>{{trans('arabic_trans.tbl_cat_name')}}</th>
                        <th>{{trans('arabic_trans.created_at')}}</th>
                        <th>{{trans('arabic_trans.updated_at')}}</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $i = 1; ?>
                    @foreach($data as $row)
                        <tr>

                            <td><?php echo $i; ?></td>
                            <?php $i++; ?>
                            <td><img width="100px" height="80px"
                                     src="{{$row->category_img}}"></td>
                            <td>{{ $row->category_name }}</td>
                            <td>{{ $row->created_at->format('Y-d-m') }}</td>
                            <td>{{ $row->updated_at->format('Y-d-m') }}</td>


                            <td class="center">
                                <div class="visible-md visible-lg hidden-sm hidden-xs">
                                    <a href="{{ URL::to('admin/categories/'.$row->id.'/edit') }}"
                                       class="btn btn-xs btn-blue tooltips" data-placement="top"
                                       data-original-title="تعديل"><i class="fa fa-edit"></i></a>

                                    <a class="btn btn btn-xs btn-red tooltips"
                                       data-href="{{ URL::to('admin/categories/'.$row->id.'/delete') }}"
                                       data-toggle="modal" data-target="#confirm-delete" style="color: #FFF"
                                       data-original-title="حذف"><i class="fa fa-times fa fa-white"> </i> </a>

                                </div>
                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                    <div class="btn-group">
                                        <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
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

@endsection

