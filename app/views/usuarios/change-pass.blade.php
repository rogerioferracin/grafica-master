@extends('templates.master')

@section('content')
<div class="large-12">
    <div class="large-6 large-offset-3">
    <h4>Altera senha: {{ $user->nome }}</h4>
        <div class="panel">
            @if($errors->has())
                <div id="erros" data-alert class="alert-box secondary">
                    @foreach($errors->all() as $erro)
                        <span class="text-info">{{ $erro }}</span><br>
                    @endforeach
                    <a href="#" class="close">&times;</a>
                </div>
            @endif

            {{ Form::open(['url'=>'usuario/change-pass']) }}
                <div class="row">
                    <div class="large-12 columns">
                        {{ Form::label('password_actual', 'Senha atual:') }}
                        {{ Form::password('password_actual') }}
                        {{ Form::hidden('user_id', $user->id) }}
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        {{ Form::label('password', 'Nova Senha:') }}
                        {{ Form::password('password') }}
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        {{ Form::label('password_confirmation', 'Confirma senha:') }}
                        {{ Form::password('password_confirmation') }}
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <ul class="button-group radius right">
                            <li>
                                {{ html_entity_decode(HTML::link('usuarios', '<i class="fi-x-circle size-16"></i> Cancelar', array('class'=>'button small secondary'))) }}
                            </li>
                            <li>
                                {{ Form::button('<i class="fi-check size-16"></i>  Alterar', array('type'=>'submit','class'=>'primary small button')) }}
                            </li>
                        </ul>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

@stop