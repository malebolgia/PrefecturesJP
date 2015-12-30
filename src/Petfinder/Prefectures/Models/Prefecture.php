<?php

namespace Petfinder\Prefectures\Models;

use Lavalite\Filer\FilerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prefecture extends Model
{
    use FilerTrait;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Initialiaze page modal
     *
     * @param $name
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Initialize the modal variables.
     *
     * @return void
     */
    public function initialize()
    {
        $this->fillable             = config('prefectures.prefecture.fillable');
        $this->uploads              = config('prefectures.prefecture.uploadable');
        $this->uploadRootFolder     = config('prefectures.prefecture.upload_root_folder');
        $this->table                = config('prefectures.prefecture.table');
    }

    

}
