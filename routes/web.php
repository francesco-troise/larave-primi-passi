<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/pagina_carrello', function(){
    return view('pagina_carrello');
});

Route::get('/pagina_profilo', function(){
    return view('pagina_profilo');
});