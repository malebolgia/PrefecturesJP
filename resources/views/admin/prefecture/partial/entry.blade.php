<div class='col-md-4 col-sm-6'>
               {!! Former::text('title')
               -> label(trans('prefectures::prefecture.label.title'))
               -> placeholder(trans('prefectures::prefecture.placeholder.title'))!!}
               </div>
                    <div class='col-md-4 col-sm-6'>
               {!! Former::select('status')
               -> options(trans('prefectures::prefecture.options.status'))
               -> label(trans('prefectures::prefecture.label.status'))
               -> placeholder(trans('prefectures::prefecture.placeholder.status'))!!}
               </div>

          