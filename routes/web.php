<?php
Route::get('/', 'HomeController@home');
/*creacion de rutas
Route::get('/', function () {
    return 'hola mundo';
});

Route::get('/test/miruta/', function () {
    return 'ruta pasada por la url';
});

//recibir parametros desde la url
Route::get('usuarios/{nombre?}', function ($nombre='Felix') {
    return $nombre;
})->where('nombre', '[a-zA-Z]+');

Route::get('/usuarios', function () {
    //devuelve todos los usuarios
});

Route::post('/usuarios', function () {
    //crea un nuevo usuario
});*/