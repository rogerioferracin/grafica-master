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
                    <span class="label primary radius">Administrador</span>
                @else
                    <span class="label success radius">Usuário</span>
                @endif
            </td>
            <td>
                @if(Auth::user()->perfil == 1 || Auth::user()->id == $usuario->id)
                    <a href="{{ URL::to('usuarios/edit', ['id'=>$usuario->id]) }}" class="label warning"><i class="fi-pencil size-14"></i> View</a>
                    {{--{{ html_entity_decode(HTML::linkAction('usuarios/edit', '<span class="fi-page-edit size-14"></span> Visualiza', array('id'=>$usuario->id), ['class'=>'label'])) }}--}}
                @else
                    <a href="#" class="label secondary"><span class="fi-page-edit size-14"></span> Visualiza</a>
                @endif
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