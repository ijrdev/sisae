<?php

/* IndexController. */
Route::name('sistema.index.')->prefix('sisae')->group(function() {
    Route::get('/', 'IndexController@index')->name('index');
});

/* EscolaController. */
Route::name('sistema.escolas.')->prefix('sisae/escolas')->group(function() {
    Route::get('/', 'EscolasController@index')->name('index');
    Route::get('/cadastro', 'EscolasController@create')->name('create');
});

/* ServicosController. */
Route::name('sistema.servicos.')->prefix('sisae/servicos')->group(function() {
    Route::get('/', 'ServicosController@index')->name('index');
    Route::get('/cadastro', 'ServicosController@create')->name('create');
});

/* FuncionalidadesController. */
Route::name('sistema.funcionalidades.')->prefix('sisae/funcionalidades')->group(function() {
    Route::get('/', 'FuncionalidadesController@index')->name('index');
    Route::get('/cadastro', 'FuncionalidadesController@create')->name('create');
});
