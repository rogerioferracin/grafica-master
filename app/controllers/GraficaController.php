<?php

class GraficaController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('usuarios');
    }

    public function getIndex()
    {
        return View::make('home');
    }
}