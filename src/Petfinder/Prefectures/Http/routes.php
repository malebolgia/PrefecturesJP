<?php

// Admin routes for prefecture
Route::group(array('prefix' =>'admin'), function ()
{
    Route::get('/prefectures/prefecture/list', 'Petfinder\Prefectures\Http\Controllers\PrefectureAdminController@lists');
    Route::resource('/prefectures/prefecture', 'Petfinder\Prefectures\Http\Controllers\PrefectureAdminController');
});

// User routes for prefecture
Route::group(array('prefix' =>'user'), function ()
{
    Route::get('/prefectures/prefecture/list', 'Petfinder\Prefectures\Http\Controllers\PrefectureUserController@lists');
    Route::resource('/prefectures/prefecture', 'Petfinder\Prefectures\Http\Controllers\PrefectureUserController');
});

// Public routes for prefecture
Route::get('prefectures/prefecture', 'Petfinder\Prefectures\Http\Controllers\PrefecturePublicController@index');
Route::get('prefectures/prefecture/{slug?}', 'Petfinder\Prefectures\Http\Controllers\PrefecturePublicController@show');