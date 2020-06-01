<?php

/* IndexController. */
Route::name('sistema.index.')->prefix('sisae')->group(function() {
    Route::get('/', 'IndexController@index')->name('index');
});

/* ServicosController. */
Route::name('sistema.servicos.')->prefix('sisae/servicos')->group(function() {
    Route::get('/', 'ServicosController@index')->name('index');
    Route::get('/cadastrar', 'ServicosController@create')->name('create');
    Route::post('/cadastrar', 'ServicosController@store')->name('store');
    Route::get('/alterar/{id}', 'ServicosController@edit')->name('edit')->where('id', '[0-9]+');
    Route::put('/alterar', 'ServicosController@update')->name('update');
    Route::get('/excluir/{id}', 'ServicosController@remove')->name('remove')->where('id', '[0-9]+');
    Route::delete('/excluir', 'ServicosController@delete')->name('delete');
});

/* FuncionalidadesController. */
Route::name('sistema.funcionalidades.')->prefix('sisae/funcionalidades')->group(function() {
    Route::get('/', 'FuncionalidadesController@index')->name('index');
    Route::get('/cadastrar', 'FuncionalidadesController@create')->name('create');
    Route::post('/cadastrar', 'FuncionalidadesController@store')->name('store');
    Route::get('/alterar/{id}', 'FuncionalidadesController@edit')->name('edit')->where('id', '[0-9]+');
    Route::put('/alterar', 'FuncionalidadesController@update')->name('update');
    Route::get('/excluir/{id}', 'FuncionalidadesController@remove')->name('remove')->where('id', '[0-9]+');
    Route::delete('/excluir', 'FuncionalidadesController@delete')->name('delete');
});

/* TemplateEmailController. */
Route::name('sistema.utilitarios.templates-email.')->prefix('sisae/utilitarios/templates-email')->group(function() {
    Route::get('/', 'TemplatesEmailController@index')->name('index');
    Route::get('/adicionar', 'TemplatesEmailController@create')->name('create');
});

/* EscolaController. */
Route::name('sistema.escolas.')->prefix('sisae/escolas')->group(function() {
    Route::get('/', 'EscolasController@index')->name('index');
    Route::get('/cadastrar', 'EscolasController@create')->name('create');
    Route::post('/cadastrar', 'EscolasController@store')->name('store');
    Route::get('/alterar/{id}', 'EscolasController@edit')->name('edit')->where('id', '[0-9]+');
    Route::put('/alterar', 'EscolasController@update')->name('update');
    Route::get('/servicos/{id}', 'EscolasController@servicos')->name('servicos')->where('id', '[0-9]+');
    Route::post('/servicos', 'EscolasController@habilitar')->name('habilitar');
});
