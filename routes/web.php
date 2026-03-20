<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $testo_prova = "Questo testo è definito dentro le singole rotte in : /routes/web.php , viene passto alle views tramite la funzione compact(). Qui siamo in Home";
    return view('home', compact('testo_prova'));
})->name('home');

Route::get('/pagina_carrello', function(){
    $testo_prova = "Questo testo è definito dentro le singole rotte in : /routes/web.php , viene passto alle views tramite la funzione compact(). Qui siamo in Carrello";
    return view('pagina_carrello', compact('testo_prova'));
})->name('carrello');

Route::get('/pagina_profilo', function(){
    $testo_prova = "Questo testo è definito dentro le singole rotte in : /routes/web.php , viene passto alle views tramite la funzione compact(). Qui siamo in Profilo";
    return view('pagina_profilo', compact('testo_prova'));
})->name('profilo');