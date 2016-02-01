<?php

Route::group(['middleware' => ['web', 'pjax']], function () {

    
    Route::get('testSendEmail', 'ContactEmailController@sendEmail');

    // Alternativa
//    Route::get('/testSendEmail', function () {
//        dispatch(new App\Jobs\SendSubscriptionEmail);
//
//        return 'Done!';
//    });

});