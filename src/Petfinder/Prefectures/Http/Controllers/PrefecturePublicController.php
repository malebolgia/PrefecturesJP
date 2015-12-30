<?php
namespace Petfinder\Prefectures\Http\Controllers;

use App\Http\Controllers\PublicController as CMSPublicController;
use Petfinder\Prefectures\Interfaces\PrefectureRepositoryInterface;

class PrefecturePublicController extends CMSPublicController
{

    /**
     * Constructor
     * @param type \Petfinder\Prefecture\Interfaces\PrefectureRepositoryInterface $prefecture
     *
     * @return type
     */
    public function __construct(PrefectureRepositoryInterface $prefecture)
    {
        $this->model = $prefecture;
        parent::__construct();
    }

    /**
     * Show prefecture's list
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $prefectures = $this->model->all();

        return $this->theme->of('prefectures::public.prefecture.index', compact('prefectures'))->render();
    }

    /**
     * Show prefecture
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $prefecture = $this->model->findBySlug($slug);

        return $this->theme->of('prefectures::public.prefecture.show', compact('prefecture'))->render();
    }
}
