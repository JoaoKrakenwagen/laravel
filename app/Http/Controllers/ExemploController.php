<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemploController extends Controller
{
  public function f() {
    return view('welcome');
  }

  public function recebeParametro($param) {
    dd($param);
  }

  public function doisparam($param1, $param2) {
    dd($param1, $param2);
  }

  public function add(Request $request) {

    $nome = $request -> input('firstname');
    $sobrenome = $request -> input('lastname');
  }

}
