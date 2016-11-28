<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('newspapers.index');
});


Route::group(['prefix' => 'newspager'], function () {

    Route::get('add', [
        "uses" => "NewspagerController@getAdd",
        "as"   => "newspager.add",
    ]);
    Route::post('add', [
        "uses" => "NewspagerController@postAdd",
    ]);

    Route::get('list', [
        "uses" => "NewspagerController@getList",
        "as"   => "newspager.list",
    ]);
    // Route::get('eICTuStudentDemandSearch', [
    //     "uses" => "NewspagerController@search",
    //     "as"   => "newspager.search",
    // ]);

    // Route::get('eICTuStudentDemandDetail/{id}', [
    //     "uses" => "newspagerController@detail",
    //     "as"   => "newspager.detail",
    // ]);

    // Route::get('delete/{id}', [
    //     "uses" => "NewspagerController@delete",
    //     "as"   => "newspager.delete",
    // ]);

    // Route::get('edit/{id}', [
    //     "uses" => "NewspagerController@get_edit",
    //     "as"   => "newspager.edit",
    // ]);
    // Route::post('edit/{id}', [
    //     "uses" => "newspagerController@post_edit",
    // ]);


});
