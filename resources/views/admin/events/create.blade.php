@extends('admin_temp')

@section('navbar')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/home') }}"> {{trans('arabic_trans.index_title')}} </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ URL::to('admin/events') }}">{{trans('arabic_trans.index_events')}}</a>
        </li>
        <li class="breadcrumb-item active">{{trans('arabic_trans.events_create')}}</li>
    </ol>
@endsection


@section('content')


    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> {{trans('arabic_trans.events_create')}}
        </div>
        <div class="card-body">
            {!! Form::open(['url' => 'admin/events', 'files'=>true]) !!}


         <!--    <div class="form-group">
                    {!! Form::label('type', 'Event Type') !!}
                    {!! Form::select('type', ['news' => 'News', 'report' => 'Report'], null, ['class'=>'form-control','placeholder' => 'Pick a Type...']) !!}
            </div> -->


            <div class="form-group">
                <label>{{trans('arabic_trans.tbl_event_Image')}}</label>
                {{ Form::file('event_img',array('accept'=>'image/*','class'=>'form-control')) }}
            </div>

            <div class="form-group">
                {!! Form::text('event_title',null,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_event_title')]) !!}
            </div>

            <div class="form-group">
                {!! Form::textArea('event_desc',null,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_event_desc')]) !!}
            </div>

            <div class="form-group">
                {!! Form::text('event_link',null,['class'=>'form-control', 'placeholder'=>trans('arabic_trans.tbl_event_link')]) !!}
            </div>

            <br>
            <div class="form-group">
                {!! Form::submit('Add Data', array('class'=>'btn btn-primary')) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection

