<?php
Route::get('/', function () {
    return view('index');
});

Route::get('/pertanyaan', 'PertanyaanController@index')->name('question');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store')->name('store-question');
Route::get('/pertanyaan/{id}', 'PertanyaanController@show')->name('question-detail');
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit')->name('edit-question');
Route::put('/pertanyaan/{id}', 'PertanyaanController@update')->name('update-question');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete')->name('delete-question');

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index')->name('answer');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store')->name('store-answer');
