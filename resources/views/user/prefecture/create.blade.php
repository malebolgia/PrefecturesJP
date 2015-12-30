{!!Former::horizontal_open()
->id('create-prefectures-prefecture')
->method('POST')
->files('true')
->action(URL::to('user/prefectures/prefecture'))!!}
@include('prefectures::user.prefecture.partial.entry')
{!! Former::close() !!}