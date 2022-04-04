<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Speakers
    Route::post('speakers/media', 'SpeakersApiController@storeMedia')->name('speakers.storeMedia');
    Route::apiResource('speakers', 'SpeakersApiController');

    // Question
    Route::apiResource('questions', 'QuestionApiController');

    // Video List
    Route::apiResource('video-lists', 'VideoListApiController');
});
