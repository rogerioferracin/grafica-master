<div class="grid">
    <nav class="navigation-bar dark">
        <nav class="navigation-bar-content">
            <a href="/" class="element"><span class="icon-printer"></span> GRÁFICA <sup>1.0</sup></a>
            <span class="element-divider"></span>

            <div class="element">
                <a class="dropdown-toggle" href="#"><span class="icon-earth"></span> Cadastros</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li>
                        <a href="#" class="dropdown-toggle"><span class="icon-user"></span> Usuários</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li>{{ HTML::link('/usuarios', 'Lista') }}</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </nav>
</div>
