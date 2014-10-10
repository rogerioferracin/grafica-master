@extends('templates.master')

@section('content')

<h3>Lista de usuarios</h3>
<p>Usuários cadastrados no sistema</p>
<table class="table responsive" id="users-table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Usuário</th>
            <th>Email</th>
            <th>Tel.</th>
            <th>Perfil</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->nome }}</td>
            <td>{{ $usuario->nomeUsuario }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->telefone }}</td>
            <td class="text-center">
                @if($usuario->perfil == 1)
                    <span class="label success radius">Administrador</span>
                @else
                    <span class="label primary radius">Usuário</span>
                @endif
            </td>
            <td>
                {{ html_entity_decode(HTML::linkAction('usuarios.edit', '<span class="fi-page-edit size-14"></span> Visualiza', array('id'=>$usuario->id), ['class'=>'label'])) }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#users-table').DataTable();
        } );
    </script>
@stop