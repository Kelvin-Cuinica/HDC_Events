<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Kelvin";
    $apelido = "Cuinica";
    $profissao = "Desenvolvedor de Software";
    $arr = [1,2,3,4,5];
    $nomes = ["Jonas", "Marcos", "Alberto", "Maria", "Kimberly"];

    return view('welcome', 
        [
            'nome' => $nome, 
            'apelido' => $apelido,
            'profissao' => $profissao,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});

Route::get('/contactos', function () {
    return view('contacts');
});

Route::get('/produtos', function () {
    return view('products');
});

Route::get('login', function() {
    return view('login');
});

