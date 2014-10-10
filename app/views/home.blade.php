@extends('templates.master')

@section('content')
    <div class="large-12">
        <div class="large-6 large-offset-3">
        <h3>Efetuar login</h3>
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
                {{ Form::token() }}
                    <div class="row">
                        <div class="large-12 columns">
                            {{ Form::label('nomeUsuario', 'Nome de usuário:') }}
                            {{ Form::text('nomeUsuario') }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            {{ Form::label('password', 'Senha:') }}
                            {{ Form::password('password') }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            {{ html_entity_decode(HTML::link('usuarios', '<i class="fi-x-circle size-16"></i> Login', array('class'=>'button small secondary'))) }}
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop