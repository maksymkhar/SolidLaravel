<?php

Route::group(['middleware' => ['web', 'pjax']], function () {


    //Route::get('testSendEmail', 'ContactEmailController@sendEmail');

    // Alternativa
    Route::get('/testSendEmail', function () {

        Debugbar::startMeasure('SendSubscriptionEmail');

        dispatch(new App\Jobs\SendSubscriptionEmail);

        Debugbar::stopMeasure('SendSubscriptionEmail');

        return 'Done!';
    });

});