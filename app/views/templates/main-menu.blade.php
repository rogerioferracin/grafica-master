<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="/" class="element"><span class="fi-print"></span> GRÁFICA <sup>1.0</sup></a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="left">
          {{--Menu cadastros--}}
          <li class="has-dropdown">
            <a href="#">Cadastros</a>
            <ul class="dropdown">
              <li class="has-dropdown"><a href="#">Usuários</a>
                <ul class="dropdown">
                    <li>{{ HTML::link('usuarios', 'Lista') }}</li>
                    <li>{{ HTML::link('usuarios/create', 'Novo') }}</li>
                </ul>
              </li>
            <li class="has-dropdown"><a href="#">Clientes</a>
                <ul class="dropdown">
                    <li>{{ HTML::link('clientes', 'Lista') }}</li>
                </ul>
              </li>
            </ul>
          </li>
          {{--Menu Financeiro--}}
          <li class="has-dropdown">
            <a href="#">Financeiro</a>
            <ul class="dropdown">
                <li class="has-dropdown">
                    <a href="#">Duplicata</a>
                    <ul class="dropdown">
                        <li><a href="#">Nova</a> </li>
                        <li><a href="#">Lista</a> </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Colaboradores</a>
                    <ul class="dropdown">
                        <li><a href="#">Nova</a> </li>
                        <li><a href="#">Lista</a> </li>
                    </ul>
                </li>
            </ul>
          </li>
        {{--Menu Produção--}}
          <li class="has-dropdown">
            <a href="#">Produção</a>
            <ul class="dropdown">
                <li class="has-dropdown">
                    <a href="#">Ordem de Serviço</a>
                    <ul class="dropdown">
                        <li><a href="#">Nova</a></li>
                        <li><a href="#">Lista</a></li>
                        <li><a href="#">Acompanhamento</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Material</a>
                    <ul class="dropdown">
                        <li><a href="#">Solicitação de material</a> </li>
                        <li><a href="#">Lista</a> </li>
                    </ul>
                </li>
            </ul>
          </li>
        </ul>
    </section>
</nav>