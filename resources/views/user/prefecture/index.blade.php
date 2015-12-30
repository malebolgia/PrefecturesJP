[<a href="/user/prefectures/prefecture/create"> {{ trans('cms.create')  }}</a>]
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <td>Id</td>
        <th>{!! trans('prefectures::prefecture.label.title')!!}</th>
            <th>{!! trans('prefectures::prefecture.label.status')!!}</th>

        <td>Action</td>
    </thead>
    <tbody>
        @foreach($prefectures as $prefecture)
        <tr>
            <td><a href="/user/prefectures/prefecture/{{ $prefecture->eid }}"> {{ $prefecture->id }} </a></td>
            <td>{{ $prefecture->title }}</td>
            <td>{{ $prefecture->status }}</td>

            <td>
                <a href="/user/prefectures/prefecture/{{ $prefecture->eid }}/edit"> Edit </a>
                <a href="/user/prefectures/prefecture/{{ $prefecture->eid }}" class="link-delete"> Delete </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script type="text/javascript">
$(document).ready(function(){
    $('.link-delete').click(function(e){
        var url = $(this).attr('href');
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function(){
            $.ajax({
                url: url,
                type: 'DELETE',
                processData: false,
                contentType: false,
                success:function(data, textStatus, jqXHR)
                {
                    data = jQuery.parseJSON(data);
                    window.location = data.redirect;
                },
            });
        });
        e.preventDefault();
    });
});
</script>