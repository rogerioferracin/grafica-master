<?php

class LoginController extends Controller
{
    /**
     * Show login form
     */
    public function getIndex()
    {
        return View::make('login');
    }

    /**
     * Do login form
     */
    public function postLogin()
    {
        $rules = array(
            'nomeUsuario' => 'required',
            'password' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->passes()) {
            if(Auth::attempt(array('nomeUsuario'=>Input::get('nomeUsuario'), 'password'=>Input::get('password'), 'ativo' => 1))) {
                return Redirect::intended('/');
            } else {
                return Redirect::back()
                    ->with('message', 'Houve uma falha ao tentar logar no sistema. <b>Nome de Usuário</b> ou <b>Senha</b> não conferem')
                    ->withInput();
            }
        } else {
            return Redirect::back()->with('message', 'Houve uma falha ao tentar logar no sistema.')->withErrors($validator)->withInput();
        }
    }

    /**
     * Logout do sistema
     */
    public function getLogout()
    {
        if(Auth::check()) {
            Auth::logout();
            return Redirect::to('/')
                ->with('message', 'Usuário efetuou o logout com sucesso!');
        }
    }
}