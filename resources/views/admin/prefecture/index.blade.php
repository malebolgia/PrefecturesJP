@extends('admin::curd.index')
@section('heading')
<i class="fa fa-file-text-o"></i> {!! trans('prefectures::prefecture.name') !!} <small> {!! trans('cms.manage') !!} {!! trans('prefectures::prefecture.names') !!}</small>
@stop

@section('title')
{!! trans('prefectures::prefecture.names') !!}
@stop

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{!! URL::to('admin') !!}"><i class="fa fa-dashboard"></i> {!! trans('cms.home') !!} </a></li>
    <li class="active">{!! trans('prefectures::prefecture.names') !!}</li>
</ol>
@stop

@section('entry')
<div class="box box-warning" id='entry-prefecture'>
</div>
@stop

@section('tools')
@stop

@section('content')
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <th>{!! trans('prefectures::prefecture.label.id')!!}</th>
            <th>{!! trans('prefectures::prefecture.label.title')!!}</th>
            <th>{!! trans('prefectures::prefecture.label.status')!!}</th>
            <th>{!! trans('prefectures::prefecture.label.deleted')!!}</th>
            <th>{!! trans('prefectures::prefecture.label.created_at')!!}</th>
            <th>{!! trans('prefectures::prefecture.label.updated_at')!!}</th>

    </thead>
</table>
@stop
@section('script')
<script type="text/javascript">

var oTable;
$(document).ready(function(){
    $('#entry-prefecture').load('{{URL::to('admin/prefectures/prefecture/0')}}');
    oTable = $('#main-list').dataTable( {
        "ajax": '{{ URL::to('/admin/prefectures/prefecture') }}',
        "columns": [
            {data :'id'},
            {data :'title'},
            {data :'status'},
            {data :'deleted'},
            {data :'created_at'},
            {data :'updated_at'},

        ],
        "prefectureLength": 50
    });

    $('#main-list tbody').on( 'click', 'tr', function () {
        $(this).toggleClass("selected").siblings(".selected").removeClass("selected");

        var d = $('#main-list').DataTable().row( this ).data();

        $('#entry-prefecture').load('{{URL::to('admin/prefectures/prefecture')}}' + '/' + d.id);

    });
});
</script>
@stop

@section('style')
@stop