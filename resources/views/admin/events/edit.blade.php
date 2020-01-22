@extends('admin_temp')

@section('navbar')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/home') }}"> {{trans('arabic_trans.index_title')}} </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/events') }}">{{trans('arabic_trans.index_events')}}</a>
        </li>
        <li class="breadcrumb-item active">{{trans('arabic_trans.event_edit')}}</li>
    </ol>
@endsection


@section('content')


    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> {{trans('arabic_trans.event_edit')}}
        </div>
        <div class="card-body">

            {!! Form::model($data, ['route' => ['events.update',$data->id] , 'method'=>'put' ,'files'=> true]) !!}
            <br>
            <div class="row">

                <div class="col-md-6">
                      <div class="form-group">
                    {!! Form::label('type', 'Data Type') !!}
                    {!! Form::select('type', ['news' => 'News', 'report' => 'Report'], $data->type, ['class'=>'form-control','placeholder' => 'Pick a Type...']) !!}
              </div>
                    <div class="form-group">
                        <label class="control-label">
                            {{trans('arabic_trans.tbl_event_title')}}
                        </label>
                        {!! Form::text('event_title',$data->event_title,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_event_title')]) !!}
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            {{trans('arabic_trans.tbl_event_desc')}}
                        </label>
                        {!! Form::textArea('event_desc',$data->event_desc,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_event_desc')]) !!}
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            {{trans('arabic_trans.tbl_event_link')}}
                        </label>
                        {!! Form::textArea('event_link',$data->event_link,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_event_link')]) !!}
                    </div>
                </div>
                <div class="col-md-6">


                    <div class="form-group">
                        <label>
                            {{trans('arabic_trans.tbl_event_Image')}}
                        </label>
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail"><img
                                    src="{{ $data->event_img }}" alt="">
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail"></div>
                            <div class="user-edit-image-buttons">
                          <span class="btn btn-azure btn-file">
                            <span class="fileupload-new "><i class="fa fa-picture "></i> Change image</span>

                            {{ Form::file('event_img',array('accept'=>'image/*','class'=>'form-control')) }}
                          <span class="fileupload-exists "><i class="fa fa-picture"></i> Change</span>
                            <input type="file">
                          </span>
                                <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">
                                    <i class="fa fa-times"></i> Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                {!! Form::submit('Save Data', array('class'=>'btn btn-primary')) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection

