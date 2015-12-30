<div class="box-header with-border">
    <h3 class="box-title">  {{ trans('prefectures::prefecture.names') }}</h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-new-prefecture"><i class="fa fa-plus-circle"></i> {{ trans('cms.new') }} </button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" style="min-height:100px">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h1 class="text-center">
            <small>
            <button type="button" class="btn btn-app" data-toggle="tooltip" data-placement="top" title=""  id="btn-new-prefecture-icn">
            <span class="badge bg-purple">{{ Prefectures::count() }}</span>
            <i class="fa fa-plus-circle  fa-3x"></i>
            {{ trans('cms.create') }} {{ trans('prefectures::prefecture.name') }}
            </button>
            <br>{{ trans('prefectures::prefecture.text.preview') }}
            </small>
            </h1>
        </div>
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('#btn-new-prefecture, #btn-new-prefecture-icn').click(function(){
        $('#entry-prefecture').load('{{URL::to('admin/prefectures/prefecture/create')}}');
    });
});
</script>