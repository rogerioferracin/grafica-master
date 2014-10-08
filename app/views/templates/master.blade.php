<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Controle de Grafica</title>
    <link rel="shortcut icon" href="{{ URL::to('/assets/images/favicon.ico') }}" />

    {{--CSS Links--}}
    {{ HTML::style('/assets/css/metro-bootstrap.min.css') }}
    {{ HTML::style('/assets/css/metro-bootstrap-responsive.min.css') }}
    {{ HTML::style('/assets/css/iconFont.min.css') }}
    {{ HTML::style('/assets/css/custom.css') }}
</head>

<body class="metro">
    <div class="container">
        <div class="grid">
            <h1>Gráfica Master</h1>
        </div>
    </div>

    <div class="container">
        <div class="grid">
            @include('templates.main-menu')
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="container">
        <div class="grid">
            <div class="row">
                <div class="span1">
                    {{ HTML::image('/assets/images/grafica-logo-100-muted.jpg', 'Logotipo do sistema - rodapé' ,array('class' => 'shadow')) }}
                </div>
                <div class="span10">
                    <span class="text-muted">Sistema Gráfica - &copy;2014 - Todos os direitos reservados.</span>
                </div>
                <div class="span1">
                    Ok
                </div>
            </div>
        </div>
    </div>
    {{ HTML::script('/assets/js/jquery.min.js') }}
    {{ HTML::script('/assets/js/jquery-ui.min.js') }}
    {{ HTML::script('/assets/js/metro.min.js') }}
</body>

</html>
