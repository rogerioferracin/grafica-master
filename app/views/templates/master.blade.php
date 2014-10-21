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
    {{ HTML::style('/assets/css/surfaceui.css') }}
    {{ HTML::style('/assets/css/foundation-icons.css') }}
    {{ HTML::style('/assets/css/responsive-tables.css') }}
    {{ HTML::style('/assets/css/dataTables.foundation.css') }}
    {{ HTML::style('/assets/css/custom.css') }}

</head>

<body>
    <div class="row" data-equalizer>
        <div class="large-2 columns" data-equalizer-watch>
            <h1>{{HTML::image('/assets/images/grafica-logo-200.jpg', 'Sistema Gerenciamento para Gráficas', array('class'=>'img-responsive'))}}</h1>
        </div>
        <div class="large-8 columns" data-equalizer-watch>
            <h2>Sistema de Gerenciamento para Gráficas</h2>
        </div>
        <div class="large-2 columns" data-equalizer-watch>
            <div class="slab">
                @if(Auth::check())
                    <p>Olá, {{ Auth::user()->nome }}</p>
                    <p>{{ HTML::link('login/logout', 'Logout', ['class'=>'label primary']) }}</p>
                @else
                    <p>Você não está logado</p>
                @endif
            </div>
        </div>
    </div>

    @if(Auth::check())
    <div id="main-menu">
        <div class="row">
            @include('templates.main-menu')
        </div>
    </div>
    @endif

    @if(Session::has('message'))
    <div class="row" id="message">
        <div class="alert-box clearfix" data-alert="close">
            <div class="large-1 columns">
                {{ HTML::image('assets/images/info-ico.png', 'Informações') }}
            </div>
            <div class="large-11 columns">
                <p>{{ Session::get('message') }}</p>
            <a href="#" class="close"><i class="fi-x"></i></a>
            </div>
        </div>
    </div>
    @endif

    <div class="row" id="content">
        @yield('content')
    </div>


    <div class="row" id="footer">
        <hr>
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
