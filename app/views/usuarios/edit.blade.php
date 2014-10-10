@extends('templates.master')

@section('content')
<div class="large-12">
    <h3>Atualiza usuário - {{ $user->nome }}</h3>

    <div class="panel">
        @if($errors->has())
            <div id="erros" data-alert class="alert-box secondary">
                @foreach($errors->all() as $erro)
                    <span class="text-info">{{ $erro }}</span><br>
                @endforeach
                <a href="#" class="close">&times;</a>
            </div>
        @endif
{{--        {{ Form::model($user, array('route' => array('usuarios.update', $user->id))) }}--}}
        {{ Form::model($user, ['method' => 'PATCH', 'route' => ['usuarios.update', $user->id]]) }}
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
                    <button href="#" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" class="button tiny dropdown secondary"><i class="fi-widget size-16"></i> Opções </button><br>
                    <ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true" tabindex="-1">
                      <li><a href="{{ URL::action('UsersController@changePassView', ['id'=>$user->id]) }}"><i class="fi-shield size-18"></i> Troca senha</a></li>
                      <li><a href="#" data-reveal-id="modal-1"><i class="fi-x size-18"></i> Exclui</a> </li>
                      <li>{{ html_entity_decode(HTML::link('#', '<i class="fi-lock size-18"></i> Desativa')) }}</li>
                    </ul>
                </div>
                <div class="large-6 columns">
                    <ul class="button-group radius right">
                        <li>
                            {{ html_entity_decode(HTML::link('usuarios', '<i class="fi-x-circle size-16"></i> Cancelar', array('class'=>'button small secondary'))) }}
                        </li>
                        <li>
                            {{ Form::button('<i class="fi-save size-16"></i>  Atualizar', array('type'=>'submit','class'=>'primary small button')) }}
                        </li>
                    </ul>
                </div>
            </div>
        {{ Form::close() }}

    </div>

</div>

<div class="reveal-modal tiny" id="modal-1" data-reveal>
    <h4>Exclui usuário: {{ $user->nome }}</h4>

    <p>Confirme sua senha para excluir o usuário selecionado!</p>
    <div class="row">
        <div class="large-12">
            {{Form::open(['route' => ['usuarios.destroy', $user->id], 'method'=>'DELETE'])}}
            {{ Form::hidden('_method', 'DELETE') }}
            <div class="row collapse">
                <div class="small-6 columns">
                    {{ Form::password('password') }}
                </div>
                <div class="small-6 columns">
                    {{ Form::button('Confirma exclusão', ['class'=>'button alert postfix', 'type' => 'submit']) }}
                </div>
            </div>
        </div>
        <div class="large-12">
            <span class="small-text-left">ATENÇÃO. Esta operação não pode ser desfeita!</span>
        </div>
    </div>

    <a class="close-reveal-modal">&times;</a>
</div>
@stop