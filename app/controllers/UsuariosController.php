<?php

class UsuariosController extends BaseController
{
    //carrega pagina com lista de usuários
    public function index()
    {
        return View::make('usuarios.index')
            ->with('usuarios', User::all());
    }

    //carrega pagina de cadastro de usuario
    public function create()
    {
        return View::make('usuarios.create');
    }

}
