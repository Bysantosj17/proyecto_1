{{-- <nav>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('posts.index') }}">Blog</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav> --}}

<nav class="navbar navbar-expand-lg bg-dark text-light">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="{{ route('home') }}">Alma negra</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white">
            <span  class="bi bi-segmented-nav"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{--  @if(auth()->user()->roles_id == 2)  --}}
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('posts.index') }}">Tatoos</a>
                    </li>
                {{--  @endif  --}}
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('about') }}">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('contact') }}">Contactame</a>
                    </li>

                @auth
                    @if(Auth::user()->roles_id == 1 )
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('citas.citas')}}">Citas</a>
                        </li>
                    @endif
                @endauth
                @auth
                    @if(Auth::user()->roles_id == 1 )
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('cita.crear_cita')}}">Crear una cita</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('register')}}">registrar un nuevo usuario</a>
                        </li>
                    @endif
                @endauth

                @guest
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('login') }}">inciar sesión</a>
                    </li>
                @endguest


                @auth
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('auth.perfil', Auth::user()->id)}}">
                            <i class="bi bi-person-circle"></i>{{Auth::user()->rol->rol}} : {{ Auth::user()->name }}
                        </a>
                    </li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <div class="col pe-5">
                            <button class="btn btn-outline-danger">Salir</button>
                        </div>
                    </form>
                @endauth
            </ul>
        </div>
    </div>
</nav>
