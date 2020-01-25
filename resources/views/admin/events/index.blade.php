@extends('admin_temp')

@section('navbar')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/home') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">{{trans('arabic_trans.index_events')}}</li>
    </ol>
@endsection


@section('content')

    <!-- DataTables Example -->
    <div style="margin-bottom: 10px;">
        <a href="{{ URL::to('admin/events/create') }}"
           class="btn btn-primary btn-sm">{{trans('arabic_trans.events_create')}}</a>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> {{trans('arabic_trans.event_pnl_header')}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>{{trans('arabic_trans.tbl_event_Id')}}</th>
                <!--         <th>{{trans('arabic_trans.tbl_event_type')}}</th> -->
                        <th>{{trans('arabic_trans.tbl_event_Image')}}</th>
                        <th>{{trans('arabic_trans.tbl_event_title')}}</th>
                        <th>{{trans('arabic_trans.tbl_event_desc')}}</th>
                        <th>{{trans('arabic_trans.tbl_event_link')}}</th>
                        <th>{{trans('arabic_trans.actions')}}</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>{{trans('arabic_trans.tbl_event_Id')}}</th>
                   <!--      <th>{{trans('arabic_trans.tbl_event_type')}}</th> -->
                        <th>{{trans('arabic_trans.tbl_event_Image')}}</th>
                        <th>{{trans('arabic_trans.tbl_event_title')}}</th>
                        <th>{{trans('arabic_trans.tbl_event_desc')}}</th>
                        <th>{{trans('arabic_trans.tbl_event_link')}}</th>
                        <th>{{trans('arabic_trans.actions')}}</th>s
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $i = 1; ?>
                    @foreach($data as $row)
                        <tr>
                            <td><?php echo $i; ?></td>
                            <?php $i++; ?>
                       <!--      <td>{{ $row->type }}</td> -->
                            <td><img width="100px" height="80px"
                                     src="{{ $row->event_img }}"></td>
                            <td>{{ $row->event_title }}</td>
                            <td>{{ $row->event_desc }}</td>
                            <td>{{ $row->event_link }}</td>

                            <td class="center">
                                <div class="visible-md visible-lg hidden-sm hidden-xs">
                                    <a href="{{ URL::to('admin/events/'.$row->id.'/edit') }}"
                                       class="btn btn-xs btn-blue tooltips" data-placement="top"
                                       data-original-title="تعديل"><i class="fa fa-edit"></i></a>

                                    <a class="btn btn btn-xs btn-red tooltips"
                                       data-href="{{ URL::to('admin/events/'.$row->id.'/delete') }}"
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
                                                   href="{{ URL::to('admin/events/'.$row->id.'/edit') }}">
                                                    <i class="fa fa-edit">

                                                    </i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a role="menuitem" tabindex="-1"
                                                   data-href="{{ URL::to('admin/events/'.$row->id.'/delete') }}"
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
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

@endsection


@section('ourscript')

    $('.previewData').click(function() {
    var id = $(this).attr('data-id');
    $.ajax({
    type: 'get',
    url: '{{ url('') }}/events/'+id,
    dataType: 'html',
    before:function(){
    $("#modal-view .modal-content .modal-title").html('Loading ..');
    $("#modal-view .modal-content .modal-body").html('<i class="fa fa-spinner fa-spin fa-5x fa-fw"></i>');
    },
    success:function(result){
    $("#modal-view .modal-content .modal-title").html('<i class="fa fa-user"></i> Product Data');
    $("#modal-view .modal-content .modal-body").html(result);
    }
    });
    });

@endsection
