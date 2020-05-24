<?php

Route::name('site.index.')->group(function() {
    Route::get('/', 'IndexController@index')->name('index');
    Route::post('/enviar', 'IndexController@store')->name('enviar');
});
