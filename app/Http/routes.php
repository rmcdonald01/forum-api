<?php

Route::group(['middleware' => ['api']],function(){

  Route::post('/auth/signup', [

    'uses' => 'AuthController@signup',

  ]);

});
