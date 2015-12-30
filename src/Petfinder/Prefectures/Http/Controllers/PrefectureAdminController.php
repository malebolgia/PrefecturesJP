<?php
namespace Petfinder\Prefectures\Http\Controllers;

use Former;
use Response;
use App\Http\Controllers\AdminController as AdminController;

use Petfinder\Prefectures\Http\Requests\PrefectureAdminRequest;
use Petfinder\Prefectures\Interfaces\PrefectureRepositoryInterface;

/**
 *
 * @package Prefecture
 */

class PrefectureAdminController extends AdminController
{

    /**
     * Initialize prefecture controller
     * @param type PrefectureRepositoryInterface $prefecture
     * @return type
     */
    public function __construct(PrefectureRepositoryInterface $prefecture)
    {
        $this->model = $prefecture;
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(PrefectureAdminRequest $request)
    {
        if($request->wantsJson()){

            $array = $this->model->json();
            foreach ($array as $key => $row) {
                $array[$key] = array_only($row, config('prefectures.prefecture.listfields'));
            }

            return array('data' => $array);
        }

        $this->theme->prependTitle(trans('prefectures::prefecture.names').' :: ');

        return $this->theme->of('prefectures::admin.prefecture.index')->render();
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     *
     * @return Response
     */
    public function show(PrefectureAdminRequest $request, $id)
    {
        $prefecture = $this->model->find($id);

        if (empty($prefecture)) {

            if($request->wantsJson())
                return [];

            return view('prefectures::admin.prefecture.new');
        }

        if($request->wantsJson())
            return $prefecture;

        Former::populate($prefecture);

        return view('prefectures::admin.prefecture.show', compact('prefecture'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(PrefectureAdminRequest $request)
    {
        $prefecture = $this->model->findOrNew(0);
        Former::populate($prefecture);

        return view('prefectures::admin.prefecture.create', compact('prefecture'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PrefectureAdminRequest $request)
    {
        try {
            $attributes         = $request->all();
            $prefecture       = $this->model->create($attributes);
            return $this->success(trans('messages.success.created', ['Module' => trans('prefectures::prefecture.name')]));
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function edit(PrefectureAdminRequest $request, $id)
    {
        $prefecture = $this->model->find($id);

        Former::populate($prefecture);

        return view('prefectures::admin.prefecture.edit', compact('prefecture'));
    }

    /**
     * Update the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PrefectureAdminRequest $request, $id)
    {
        try {
            $attributes         = $request->all();
            $prefecture       = $this->model->update($attributes, $id);
            return $this->success(trans('messages.success.updated', ['Module' => trans('prefectures::prefecture.name')]));
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Remove the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(PrefectureAdminRequest $request, $id)
    {
        try {
            $this->model->delete($id);
            return $this->success(trans('message.success.deleted', ['Module' => trans('prefectures::prefecture.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

}
