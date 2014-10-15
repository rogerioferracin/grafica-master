<?php

class GraficaController extends Controller
{
    public function getIndex()
    {
        return View::make('home');
    }

    /**
     * Show login form
     */
    public function showLogin()
    {
        return View::make('login');
    }

    /**
     * Do login form
     */
    public function doLogin()
    {
        $rules = array(
            'nomeUsuario' => 'required',
            'password' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->passes()) {
            if(Auth::attempt(array('nomeUsuario'=>Input::get('nomeUsuario'), 'password'=>Input::get('password'), 'ativo' => 1))) {
                return Redirect::to('/');
            } else {
                return Redirect::back()
                    ->with('message', 'Houve uma falha ao tentar logar no sistema. <b>Nome de Usuário</b> ou <b>Senha</b> não conferem')
                    ->withInput();
            }
        } else {
            return Redirect::back()->with('message', 'Houve uma falha ao tentar logar no sistema.')->withErrors($validator)->withInput();
        }
    }

    public function doLogout()
    {
        if(Auth::check()) {
            Auth::logout();
            return Redirect::to('login')
                ->with('message', 'Usuário efetuou o logout com sucesso!');
        }
    }
}