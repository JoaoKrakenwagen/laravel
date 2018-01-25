<?php

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
    return view('welcome');
});

Route::get('/secondview', function () {
    return view('secondview');
});

Route::get('thirdview', function () {
    return view('pages.thirdview');
});

Route::get('servicos', function() {
  return "O serviço do Fulano é muito bom,
  <br> <br>
  Gostou? <a href = '".url('contato')."'>
  Esse é o contato dele. </a>";
});

Route::get('servicos1/{nome}', function($nome) {
  return "O serviço do ".$nome." é muito bom,
  <br> <br>
  Gostou? <a href = 'https://laravel.com/'>
  Esse é o contato dele. </a>";
});

Route::get('servicos2/{nome}/{telefone}', function($nome, $telefone) {
  return "O serviço do ".$nome." é muito bom.
  <br><br>
  Gostou?
  <a href = '".url('contato')."'>
    Esse é o telefone dele: ".$telefone."
  </a>";
});

route::get('nome', function() {
  return view('nome')->with('name', 'Victor');
});

Route::get('servicos3/{nome}', function($nome) {
  return "Nome: ".$nome;
});

Route::get('servicos3/{nome}/{cpf}', function($nome, $cpf) {
  return
  "Nome: ".$nome."<br>
  cpf: ".$cpf;
});

Route::get('servicos3/{nome}/{cpf}/{rg}', function($nome, $cpf,$rg) {
  return
  "Nome: ".$nome."<br>
  cpf: ".$cpf."<br>
  rg: ".$rg;
});

Route::get('servicos3/{nome}/{cpf}/{rg}/{cep}', function($nome, $cpf,$rg,$cep) {
  return
  "Nome: ".$nome."<br>
  cpf: ".$cpf."<br>
  rg: ".$rg."<br>
  cep: ".$cep;
});

Route::get('char/{name}/{level}/{class}', function($name, $level, $class) {
  return view('char', ['nome' => $name,'nivel'=> $level,'classe'=> $class]);
});

Route::get('/', 'ExemploController@f');

Route::get('/teste1/{param}', 'ExemploController@recebeParametro');

Route::get('/teste2/{param1}/{param2}', 'ExemploController@doisparam');

Route::get('/nova', function(){
  return view('nova');
});

Route::post('/', 'ExemploController@add')->name('routename');
