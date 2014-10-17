<?php

class ClientesController extends Controller
{
    /**
     * Show Index page
     */
    public function getIndex()
    {
        return View::make('clientes.index');
    }
}