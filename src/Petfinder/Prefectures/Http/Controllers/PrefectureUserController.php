<?php
namespace Petfinder\Prefectures\Http\Controllers;

use Former;
use Response;
use User;
use App\Http\Controllers\UserController as UserController;

use Petfinder\Prefectures\Http\Requests\PrefectureUserRequest;
use Petfinder\Prefectures\Interfaces\PrefectureRepositoryInterface;

/**
 *
 * @package Prefecture
 */

class PrefectureUserController extends UserController
{

    /**
     * Redirect path after an action.
     */
    protected $redirectPath = '/user/prefectures/prefecture/';


    /**
     * Initialize prefecture controller
     * @param type PrefectureRepositoryInterface $prefecture
     * @return type
     */
    public function __construct(PrefectureRepositoryInterface $prefecture)
    {
        $this->model = $prefecture;
        $this->model->setUserFilter();
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(PrefectureUserRequest $request)
    {

        $prefectures  = $this->model->all();

        $this->theme->prependTitle(trans('prefectures::prefecture.names').' :: ');

        return $this->theme->of('prefectures::user.prefecture.index', compact('prefectures'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     *
     * @return Response
     */
    public function show(PrefectureUserRequest $request, $id)
    {
        $prefecture = $this->model->find($id);

        return $this->theme->of('prefectures::user.prefecture.show', compact('prefecture'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(PrefectureUserRequest $request)
    {
        $prefecture = $this->model->findOrNew(0);

        Former::populate($prefecture);

        return $this->theme->of('prefectures::user.prefecture.create', compact('prefecture'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PrefectureUserRequest $request)
    {
        try {
            $attributes             = $request->all();
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
    public function edit(PrefectureUserRequest $request, $id)
    {
        $prefecture = $this->model->find($id);

        Former::populate($prefecture);

        return $this->theme->of('prefectures::user.prefecture.edit', compact('prefecture'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PrefectureUserRequest $request, $id)
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
    public function destroy(PrefectureUserRequest $request, $id)
    {
        try {
            $this->model->delete($id);
            return $this->success(trans('message.success.deleted', ['Module' => trans('prefectures::prefecture.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

}
