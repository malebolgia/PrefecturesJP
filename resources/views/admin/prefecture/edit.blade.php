<div class="box-header with-border">
    <h3 class="box-title"> {{ trans('cms.edit') }}  {{ trans('prefectures::prefecture.name') }} [{!!$prefecture->name!!}] </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-save"><i class="fa fa-floppy-o"></i> {{ trans('cms.save') }}</button>
        <button type="button" class="btn btn-default btn-sm" id="btn-close"><i class="fa fa-times-circle"></i> {{ trans('cms.close') }}</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#prefecture" data-toggle="tab">{{ trans('prefectures::prefecture.tab.name') }}</a></li>
        </ul>
        {!!Former::vertical_open()
        ->id('edit-prefecture')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(URL::to('admin/prefectures/prefecture/'. $prefecture['id']))!!}
        <div class="tab-content">
            <div class="tab-pane active" id="prefecture">
                @include('prefectures::admin.prefecture.partial.entry')
            </div>
        </div>
        {!!Former::close()!!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">

        (function ($) {
            $('#btn-close').click(function(){
                $('#entry-prefecture').load('{{URL::to('admin/prefectures/prefecture')}}/{{$prefecture->id}}');
            });

            $('#btn-save').click(function(){
                $('#edit-prefecture').submit();
            });

            $('#edit-prefecture')
            .submit( function( e ) {

                if($('#edit-prefecture').valid() == false) {
                    toastr.warning({{ trans('message.unprocessable') }}, '{{ trans('cms.warning') }}');
                    return false;
                }

                var formURL  = "{{ URL::to('admin/prefectures/prefecture/')}}/{{@$prefecture->id}}";
                $.ajax( {
                    url: formURL,
                    type: 'POST',
                    data: new FormData( this ),
                    processData: false,
                    contentType: false,
                    success:function(data, textStatus, jqXHR)
                    {
                        $('#entry-prefecture').load('{{URL::to('admin/prefectures/prefecture')}}/{{$prefecture->id}}');
                        $('#main-list').DataTable().ajax.reload( null, false );
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                    }
                });
                e.preventDefault();
            });

        }(jQuery));

</script>