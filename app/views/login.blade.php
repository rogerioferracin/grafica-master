@extends('templates.master')

@section('content')
    <div class="large-12">
        <hr>
        <div class="large-6 large-offset-3">
        <h3>Efetuar login</h3>
            <div class="panel">
                @if($errors->has())
                    <div id="erros" data-alert class="alert-box secondary">
                        @foreach($errors->all() as $error)
                            <span class="text-info">{{ $error }}</span><br>
                        @endforeach
                        <a href="#" class="close">&times;</a>
                    </div>
                @endif

                {{ Form::open(['url'=>'login/login']) }}
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
                            {{Form::button('<i class="fi-unlock size-18"></i> Login', ['class'=>'button radius small right', 'type'=>'submit'])}}
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop