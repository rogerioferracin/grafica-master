<?php

class UsuariosController extends BaseController
{

    public function index()
    {
        return View::make('usuarios.index')
            ->with('usuarios', User::all());
    }

}
