<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}">Electric<span>Sheep</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="{{ Route::current()->getName() == 'index' ? 'active' : null }}"><a href="{{ route('index') }}">Home</a></li>
                <li class="{{ Route::current()->getName() == 'libros' ? 'active' : null }}"><a href="{{ route('libros') }}">Libros</a></li>

                <li class="dropdown {{ Request::segment(1) === 'autores' ? 'active' : null }}">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Autores <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('autores') }}#Clarke">Arthur C. Clarke</a></li>
                        <li><a href="{{ route('autores') }}#Asimov">Isaac Asimov</a></li>
                        <li><a href="{{ route('autores') }}#Dick">Philip K. Dick</a></li>
                        <li><a href="{{ route('autores') }}#Bradbury">Ray Bradbury</a></li>
                        <li><a href="{{ route('autores') }}#Heinlein">Robert A. Heinlein</a></li>
                        <li><a href="{{ route('autores') }}#Le-Guin">Ursula K. Le Guin</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li class="{{ Route::current()->getName() == 'register' ? 'active' : null }}"><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li class="{{ Route::current()->getName() == 'login' ? 'active' : null }}"><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('home') }}">Zona Usuario</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>