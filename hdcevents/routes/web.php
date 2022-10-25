<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $nome = "Luis";
    $idade = 25;
    $arr = [1,2,3,4,5];
    $nomes = ["Luis","Felipe","José","Maria","Mateus","Pedro"];
    return view('welcome',
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => "Programador",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});

Route::get('/contact', function () {
    return view('Contact');
});

Route::get('/produtos', function () {
    return view('product');
});
