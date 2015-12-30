<?php

namespace Petfinder\Prefectures\Repositories\Eloquent;

use Petfinder\Prefectures\Interfaces\PrefectureRepositoryInterface;

class PrefectureRepository extends BaseRepository implements PrefectureRepositoryInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return config('prefectures.prefecture.model');
    }
}
