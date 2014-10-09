@extends('templates.master')

@section('content')
    <h3>Lista de usuarios</h3>
    <p>Usuários cadastrados no sistema</p>
    <div class="example">
        <table class="table striped">
            <thead>
                <tr>
                    <th class="text-left">Nome</th>
                    <th class="text-left">Usuário</th>
                    <th class="text-left">Email</th>
                    <th class="text-left">Tel.</th>
                    <th class="text-left">Perfil</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->nomeUsuario }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->telefone }}</td>
                    <td>
                        @if($usuario->perfil == 1)
                            <span class="badge-box bg-lightBlue">Administrador</span>
                        @else
                            <span class="badge-box bg-lightBlue">Usuário</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @stop