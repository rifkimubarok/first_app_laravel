<?php

Route::get('/', function () {
    return "Hellow World";
});

// Route::get('/profile/{name}', function ($name) {
//     return "Profile <br> My name $name";
// });

// Route::get('/profile/{name}/{matkul}', function ($name,$matkul) {
//     return "Profile <br> My name $name <br> $matkul : 90";
// });

// Route::get('/profile/{name?}', function ($name="Guest") {
//     return "Profile <br> My name $name";
// });

Route::get('/profile', "ProfileController@index");
Route::get('/profile/detail', "ProfileController@detail");

Route::get('/film/',"FilmController@index");

Route::get('/film/create',function()
{
    return view("film.create");
});

Route::post('/film/creating','FilmController@creating');

Route::get('/film/{id}/delete','FilmController@delete');

Route::get('/film/{id}/update','FilmController@update');
Route::post('/film/{id}/updating','FilmController@updating');

Route::get("/data","DataController@index");