@extends('templates.master')

@section('content')
<div class="large-12">
    <h3>Novo usuário</h3>
    <div class="panel">
    @if($errors->has())
        <div id="erros" data-alert class="alert-box secondary">
            @foreach($errors->all() as $erro)
                <span class="text-info">{{ $erro }}</span><br>
            @endforeach
            <a href="#" class="close">&times;</a>
        </div>
    @endif
    {{ Form::open(array('url' => 'usuarios', 'method'=>'post')) }}
    {{ Form::token() }}
        <div class="row">
            <div class="large-12 columns">
                {{ Form::label('nome', 'Nome:') }}
                {{ Form::text('nome') }}
            </div>
        </div>
        <div class="row">
            <div class="large-6 columns">
                {{ Form::label('nomeUsuario', 'Usuário:') }}
                {{ Form::text('nomeUsuario') }}
            </div>
            <div class="large-6 columns">
                {{ Form::label('perfil', 'Perfil:') }}
                {{ Form::select('perfil',array('1'=>'Administrador', '2'=>'Usuário')) }}
            </div>
        </div>
        <div class="row">
            <div class="large-6 columns">
                {{ Form::label('email', 'Email:') }}
                {{ Form::text('email') }}
            </div>
            <div class="large-6 columns">
                {{ Form::label('telefone', 'Telefone:') }}
                {{ Form::text('telefone') }}
            </div>
        </div>
        <div class="row">
            <div class="large-6 columns">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password') }}
            </div>
            <div class="large-6 columns">
                {{ Form::label('password_confirmation', 'Confirma senha:') }}
                {{ Form::password('password_confirmation') }}
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <ul class="button-group radius right">
                    <li>
                        {{ html_entity_decode(HTML::link('usuarios', '<i class="fi-x-circle"></i> Cancelar', array('class'=>'button small secondary'))) }}
                    </li>
                    <li>
                        {{ Form::button('<i class="fi-save"></i>  Cadastrar', array('type'=>'submit','class'=>'primary small button')) }}
                    </li>
                </ul>
            </div>
        </div>
    {{ Form::close() }}

    </div>
</div>

@stop