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
        'password' => 'sometimes|required|between:6,12|confirmed',
        'password_confirmation' => 'sometimes|required|between:6,12',
    );

    public function setPasswordAttribute($value)
    {
        Log::info('Senha a ser gravada: ' . $value);
        $this->attributes['password'] = Hash::make($value);
    }

}
