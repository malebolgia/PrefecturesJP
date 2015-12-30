<div class="col-md-12">
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="id">
                {!! trans('prefectures::prefecture.label.id') !!}
              </label><br />
              {!! $prefecture['id'] !!}
         </div>
      </div>
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
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="deleted">
                {!! trans('prefectures::prefecture.label.deleted') !!}
              </label><br />
              {!! $prefecture['deleted'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="created_at">
                {!! trans('prefectures::prefecture.label.created_at') !!}
              </label><br />
              {!! $prefecture['created_at'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="updated_at">
                {!! trans('prefectures::prefecture.label.updated_at') !!}
              </label><br />
              {!! $prefecture['updated_at'] !!}
         </div>
      </div>
[<a href='/prefectures/prefecture/{{ $prefecture['slug'] }}'>View</a>]
<hr>
</div>