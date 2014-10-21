<?php

class UsersController extends \BaseController
{
    public function __construct()
    {
        //$this->beforeFilter('csrf', array('on'=>'post'));
        $this->beforeFilter('usuarios');
    }



    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        return View::make('usuarios.index')
            ->with('usuarios', User::all());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        return View::make('usuarios.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postStore()
    {
        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->passes()) {

            $user = new User();
            $user->nome = Input::get('nome');
            $user->nomeUsuario = Input::get('nomeUsuario');
            $user->email = Input::get('email');
            $user->telefone = Input::get('telefone');
            $user->password = Input::get('password');
            $user->perfil = Input::get('perfil');
            $user->ativo = 1;
            if ($user->save()) {
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
     * @param  int $id
     * @return Response
     */
    public function getShow($id)
    {
        //return View::make('usuarios.create');
    }

    public function putAlternaStatus($id)
    {
        //TODO form não envia pra cá
        Log::info('Aqui chegou sim!!!!');
        return Redirect::to('usuarios')
            ->with('message', 'Aqui chegou!!!');
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int $id
     * @return Response
     */
    public function getEdit($id)
    {
        $user = User::findOrFail($id);

        if (is_null($user)) {
            return Redirect::to('usuarios')->with('message', 'Usuário não encontrado. Tente novamente!');
        }
        return View::make('usuarios.edit', compact('user'));
    }


    /**
     * Update the specified resource in storage.
     * @param  int $id
     * @return Response
     */
    public function patchUpdate($id)
    {
        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->passes()) {
            $user = User::findOrFail($id);
            $user->nome = Input::get('nome');
            $user->nomeUsuario = Input::get('nomeUsuario');
            $user->email = Input::get('email');
            $user->telefone = Input::get('telefone');
            $user->perfil = Input::get('perfil');
            $user->ativo = 1;

            if (count($user->getDirty()) > 0) {
                $user->save();
                return Redirect::to('usuarios')->with('message', 'Usuario <b>' . $user->nome . '</b> atualizado com sucesso!');
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
     * @param  int $id
     * @return Response
     */
    public function deleteDestroy($id)
    {

        if(empty(Input::get('password'))) {
            return Redirect::back() -> with('message', 'Senha de administrador é necessária para confirmar a exclusão!');
        }

        $user = User::findOrFail($id);
        if($this->checkPassword(Input::get('password'), Auth::user()->password)) {
            $user->delete();

            return Redirect::to('usuarios')
                ->with('message', 'Usuário excluido com sucesso!');
        }
            return Redirect::back()
                ->with('message', 'Senha de Admin inválida. Tente novamente!');
    }

    /**
     * Show the form to change user password
     * @param $id
     * @return \Illuminate\View\View
     */
    public function getChangePass($id)
    {
        $user = User::findOrFail($id);
        return View::make('usuarios.change-pass', compact('user'));
    }

    /**
     * Check and change user password
     */
    public function postChangePass()
    {
        $user = User::findOrFail(Input::get('user_id'));

        if ($this->checkPassword(Input::get('password_actual'), $user->password)) {
            $rules = array(
                'password' => 'required|between:6,12|confirmed|different:password_actual',
                'password_confirmation' => 'required|between:6,12',
            );
            $messages = array(
                'password.required' => 'O campo Nova Senha é requerido',
                'password.between' => 'O campo Nova Senha precisa ter entre 6 e 12 caracteres!',
                'password.confirmed' => 'O campo Nova Senha e Confirma Senha precisam ser iguais!',
                'password.different' => 'O campo Nova Senha precisam ser diferente de sua Senha Atual!',
                'password_confirmation.required' => 'O campo Confirma Senha é requerido',
                'password_confirmation.between' => 'O campo Nova Senha precisa ter entre 6 e 12 caracteres!',
            );

            $validator = Validator::make(Input::all(), $rules, $messages);

            if ($validator->passes()) {
                $user->password = Input::get('password');
                $user->save();
                return Redirect::to('usuarios')->with('message', $user->nome . ', sua senha foi atualizada com sucesso!!!');
            }
            return Redirect::back()
                ->with('message', 'Ocorreram alguns problemas ao validar os dados!')
                ->withErrors($validator)
                ->withInput();
        }
        return Redirect::back()->with('message', 'Ocorreram alguns problemas ao validar os dados!')
            ->withErrors('Senha atual não confere!');
    }

    /**
     * @param $hashedPassword User to have a pass confirmed
     * @param $password Password to confirm
     * @return bool return value
     */
    private function checkPassword($password, $hashedPassword)
    {
        return $result = Hash::check($password, $hashedPassword);
    }
}
