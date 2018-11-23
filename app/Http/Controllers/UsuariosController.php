<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuario;
use DB;

class UsuariosController extends Controller

{
    public function adiciona(Request $request) {

        $usuario = Usuario::create($request->all());
        return $usuario->getUuid();

        DB::insert('insert into usuarios (nome, dataNascimento, cpf, cep, endereco, numero, bairro, cidade, estado, complemento) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', array($nome, $dataNascimento, $cpf, $cep, $endereco, $numero, $bairro, $cidade, $estado, $complemento));
    }
}

?>