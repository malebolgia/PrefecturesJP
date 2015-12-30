<div class="row">
  <div class="col-md-12">
    @forelse($prefectures as $prefecture)
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="title">
                {!! trans('prefectures::prefecture.label.title') !!}
              </label><br />
              {!! $prefecture['title'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="status">
                {!! trans('prefectures::prefecture.label.status') !!}
              </label><br />
              {!! $prefecture['status'] !!}
         </div>
      </div>
[<a href='/prefectures/prefecture/{{ $prefecture['slug'] }}'>View</a>]
<hr>
    @empty
    <p>No prefectures</p>
    @endif
  </div>
</div>