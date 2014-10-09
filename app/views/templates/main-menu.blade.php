<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="/" class="element"><span class="icon-printer"></span> GRÁFICA <sup>1.0</sup></a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="left">
          <li class="has-dropdown">
            <a href="#">Cadastros</a>
            <ul class="dropdown">
              <li class="has-dropdown"><a href="#">Usuários</a>
                <ul class="dropdown">
                    <li>{{ HTML::link('usuarios', 'Lista') }}</li>
                    <li>{{ HTML::link('usuarios/create', 'Novo') }}</li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
    </section>
</nav>