{!!Former::horizontal_open()
->id('edit-prefectures-prefecture')
->method('PUT')
->files('true')
->action(URL::to('user/prefectures/prefecture') .'/'.$prefecture['eid'])!!}
@include('prefectures::user.prefecture.partial.entry')
{!! Former::close() !!}