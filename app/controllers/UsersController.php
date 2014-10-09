<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('usuarios.index')
            ->with('usuarios', User::all());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usuarios.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), User::$rules);

        if($validator->passes()) {

            $user = new User();
            $user->nome = Input::get('nome');
            $user->nomeUsuario = Input::get('nomeUsuario');
            $user->email = Input::get('email');
            $user->telefone = Input::get('telefone');
            $user->password = Input::get('password');
            $user->perfil = Input::get('perfil');
            $user->ativo = 1;
            if($user->save()) {
                return Redirect::to('usuarios')
                    ->with('message', 'Usuário <b> ' . $user->nome . '</b> criado com sucesso');
            } else {
                return Redirect::to('usuarios')
                    ->with('message', 'Ocorreu um erro ao criar o novo usuário tente novamente mais tarde!');

            }

        }

        return Redirect::to('usuarios/create')
            ->with('message', 'Ocorreram alguns problemas ao validar os dados do usuário')
            ->withErrors($validator)
            ->withInput();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        //return View::make('usuarios.create');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $user = User::findOrFail($id);

        if(is_null($user)) {
            return Redirect::to('usuarios')->with('message', 'Usuário não encontrado. Tente novamente!');
        }
		return View::make('usuarios.edit', compact('user'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $validator = Validator::make(Input::all(), User::$rules);

        if($validator->passes()) {
            $user = User::findOrFail($id);
            $user->nome = Input::get('nome');
            $user->nomeUsuario = Input::get('nomeUsuario');
            $user->email = Input::get('email');
            $user->telefone = Input::get('telefone');
            $user->perfil = Input::get('perfil');
            $user->ativo = 1;

            if(count($user->getDirty()) > 0) {
                $user->save();
                return Redirect::to('usuarios')->with('message', 'Usuario <b>'. $user->nome . '</b> atualizado com sucesso!');
            } else {
                return Redirect::to('usuarios')->with('message', 'Nenhuma atualização efetuada no usuário!');
            }
        }
        return Redirect::back()
            ->with('message', 'Ocorreram alguns problemas ao validar os dados do usuário')
            ->withErrors($validator)
            ->withInput();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
