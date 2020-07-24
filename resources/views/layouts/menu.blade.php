<div class="navbar-header"> 
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav ml-auto">


        <a class="navbar-brand" href="{{ url('/') }}"> Gestion Financiera </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!-- Authentication Links -->
        @if (!Auth::guest())
            @if( Auth::user()->isRole('Administrador') )

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ URL::to('users') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Mantenedores <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ URL::to('establecimientos') }}"> Usuarios </a>
                         <a class="dropdown-item" href="{{ URL::to('establecimientos') }}"> Comunas </a>
                    </div>                   
                </li>   


                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ URL::to('users') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Reportes <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ URL::to('establecimientos') }}"> Resumen </a>
                    </div>                   
                </li>   

            @endif
            

            @if( Auth::user()->isRole('Abastecimiento') )

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ URL::to('users') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Mantenedores <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ URL::to('establecimientos') }}"> Productos </a>
                    </div>                   
                </li>   

            @endif
        @endif
    </ul>

</div>