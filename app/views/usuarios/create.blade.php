@extends('templates.master')

@section('content')
<div class="panel">
    <div class="panel-header">
        Novo usuário
    </div>
    <div class="panel-content">
        {{ Form::open(array('url' => '/usuarios/store', 'method'=>'post')) }}
            <div class="row">
                <div class="span12">
                    <table class="table">
                        <tr>
                            <td class="span2 text-right">{{ Form::label('nome', 'Nome') }}</td>
                            <td colspan="3">
                                <div class="input-control text" data-role="input-control">
                                    {{ Form::text('nome') }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="span2 text-right">{{ Form::label('nomeUsuario', 'Usuário:') }}</td>
                            <td>
                                <div class="input-control text" data-role="input-control">
                                    {{ Form::text('nomeUsuario') }}
                                </div>
                            </td>
                            <td class="span2 text-right">{{ Form::label('perfil', 'Perfil:') }}</td>
                            <td>
                                <div class="input-control select" data-role="input-control">
                                    {{ Form::select('perfil',array('1'=>'Administrador', '2'=>'Usuário')) }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="span2 text-right">{{ Form::label('email', 'Email:') }}</td>
                            <td>
                                <div class="input-control text" data-role="input-control">
                                    {{ Form::text('email') }}
                                </div>
                            </td>
                            <td class="span2 text-right">{{ Form::label('telefone', 'Telefone:') }}</td>
                            <td>
                                <div class="input-control text" data-role="input-control">
                                    {{ Form::text('telefone') }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="span2 text-right">{{ Form::label('password', 'Senha:') }}</td>
                            <td>
                                <div class="input-control password" data-role="input-control">
                                    {{ Form::password('password') }}
                                </div>
                            </td>
                            <td class="span2 text-right">{{ Form::label('password_confirmation', 'Confirma:') }}</td>
                            <td>
                                <div class="input-control password" data-role="input-control">
                                    {{ Form::password('password_confirmation') }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-right">
                                {{ Form::button('<i class="icon-cancel-2"></i>  Cadastrar', array('class'=>'default')) }}
                                {{ Form::button('<i class="icon-checkmark"></i>  Cadastrar', array('type'=>'submit','class'=>'primary')) }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        {{ Form::close() }}
    </div>
</div>

@stop