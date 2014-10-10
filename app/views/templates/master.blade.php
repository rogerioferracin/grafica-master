<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta lang="pt-br">
    <title>Controle de Grafica</title>
    <link rel="shortcut icon" href="{{ URL::to('/assets/images/favicon.ico') }}" />

    {{--CSS Links--}}
    {{ HTML::style('/assets/css/normalize.css') }}
    {{ HTML::style('/assets/css/foundation.min.css') }}
    {{ HTML::style('/assets/css/foundation-icons.css') }}
    {{ HTML::style('/assets/css/responsive-tables.css') }}
    {{ HTML::style('/assets/css/dataTables.foundation.css') }}
    {{ HTML::style('/assets/css/custom.css') }}

</head>

<body>

    <div class="row">
        <div class="large-2 columns">
            <h1>{{HTML::image('/assets/images/grafica-logo-200.jpg', 'Sistema Gerenciamento para Gráficas', array('class'=>'img-responsive'))}}</h1>
        </div>
        <div class="large-8 columns">
            <h2>Sistema de Gerenciamento para Gráficas</h2>
        </div>
        <div class="large-2 columns">
            @if(Auth::check())
                <p>Olá, {{ Auth::user()->nome }}</p>
            @else
                <span>Você não está logado</span>
            @endif
        </div>
    </div>


    <div id="main-menu">
        <div class="row">
            @include('templates.main-menu')
        </div>
    </div>

    @if(Session::has('message'))
    <div class="row" id="message">
        <div class="large-1 columns">
            <i class="fi-info" style="font-size: 2.2em; color: #4528b2"></i>
        </div>
        <div class="large-11 columns">
            <div class="alert-box info" data-alert>
                {{ Session::get('message') }}
                <a href="#" class="close">&times;</a>
            </div>
        </div>
    </div>
    @endif

    <div class="row" id="content">
        @yield('content')
    </div>

    <hr>

    <div class="row" id="footer">
        <div class="large-2 columns">
            {{ HTML::image('/assets/images/grafica-logo-100-muted.jpg', 'Logotipo do sistema - rodapé' ,array('class' => 'shadow')) }}
        </div>
        <div class="large-8 columns">
            <span class="text-muted">Sistema Gráfica - &copy;2014 - Todos os direitos reservados.</span>
        </div>
        <div class="large-2 columns">
            Ok
        </div>
    </div>

    {{ HTML::script('/assets/js/jquery.min.js') }}
    {{ HTML::script('/assets/js/jquery-ui.min.js') }}
    {{ HTML::script('/assets/js/foundation.min.js') }}
    {{ HTML::script('/assets/js/modernizr.js') }}
    {{ HTML::script('/assets/js/responsive-tables.js') }}
    {{ HTML::script('/assets/js/jquery.dataTables.min.js') }}
    {{ HTML::script('/assets/js/dataTables.foundation.js') }}

    <script>
        $(document).foundation();
    </script>

    @yield('scripts')

</body>

</html>
