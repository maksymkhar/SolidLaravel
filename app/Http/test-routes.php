<?php

use App\User;

Route::group(['middleware' => ['web', 'pjax']], function () {


    //Route::get('testSendEmail', 'ContactEmailController@sendEmail');

    // Alternativa
    Route::get('/testSendEmail', function (User $user) {

        Debugbar::startMeasure('SendSubscriptionEmail');

        dispatch(new \App\Jobs\SendSubscriptionEmail($user));

        Debugbar::stopMeasure('SendSubscriptionEmail');

        return 'Done!';
    });

});