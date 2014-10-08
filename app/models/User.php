<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    protected $fillable = array('nome', 'nomeUsuario', 'email', 'telefone', 'perfil', 'password', 'ativo');

    //Validation rules
    public static $rules = array(
        'nome' => 'required|min:5',
        'nomeUsuario' => 'required|min:4',
        'email' => 'required|email',
    );

    //Validation messages
    public static $messages = array(
        'nome.required' => 'Campo <b>Nome</b> é requerido!',
        'nome.min' => 'Campo <b>Nome</b> precisa ter pelo menos :min caracteres!',
        'nomeUsuario.required' => 'Campo <b>Nome de Usuário</b> é requerido!',
        'nomeUsuario.min' => 'Campo <b>Nome de Usuário</b> precisa ter pelo menos :min caracteres!',
        'email.required' => 'Campo <b>E-mail</b> é requerido!',
        'email.email' => 'Campo <b>E-mail</b> precisa ter um email válido!',
        'password.required' => 'Uma <b>Senha</b> precisa ter cadastrada!',
        'password.confirmed' => 'Campo <b>Senha</b> e <b>Confirma</b> precisam ser iguais!',
    );


    public function setPasswordAttribute($value)
    {
        Log::info('Senha a ser gravada: ' . $value);
        $this->attributes['password'] = Hash::make($value);
    }

}
