@extends('templates.master')

@section('content')
<div class="large-12">
    <h3>Bem vindo ao sistema</h3>

<div class="row" data-equalizer>
    <div class="large-3 columns" data-equalizer-watch>
        <div class="row slab">
            <div class="large-6 columns">
                {{ HTML::link('usuarios', 'Usuários', ['class' => 'button expand purple radius']) }}
            </div>
        </div>
    </div>
    <div class="large-6 columns" data-equalizer-watch>
        <div class="slab" >
            <h3 class="slab-title">Faturas</h3>
            <table class="table responsive" width="100%">
                <thead>
                    <tr>
                        <th>Fatura</th>
                        <th>Vencimento</th>
                        <th>Valor</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1154</td>
                        <td>15/12/2014</td>
                        <td>R$ 1852,00</td>
                        <td>Aberto</td>
                    </tr>
                    <tr>
                        <td>1154</td>
                        <td>15/12/2014</td>
                        <td>R$ 1852,00</td>
                        <td>Aberto</td>
                    </tr>
                    <tr>
                        <td>1154</td>
                        <td>15/12/2014</td>
                        <td>R$ 1852,00</td>
                        <td>Aberto</td>
                    </tr>
                    <tr>
                        <td>1154</td>
                        <td>15/12/2014</td>
                        <td>R$ 1852,00</td>
                        <td>Aberto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="large-3 columns" data-equalizer-watch>
       <div class="block css">
            <div class="thumb">{{ HTML::image('assets/images/grafica-500.jpg', 'Grafica') }}
                <span class="ico-popup"><a href="#"><i class="fi-search"></i></a></span>
                <span class="overlay"></span>
            </div>
            <div class="desc">
                <div class="title">A Bugs Life</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis quam ac lectus commodo tincidunt non vitae tortor.</p>
                <a href="#" class="button small radius wide alert">Source</a>
            </div>
       </div>
    </div>
</div>
</div>
@stop