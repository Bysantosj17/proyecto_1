{{-- <nav>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
<li><a href="{{ route('posts.index') }}">Blog</a></li>
<li><a href="{{ route('about') }}">About</a></li>
<li><a href="{{ route('contact') }}">Contact</a></li>
</ul>
</nav> --}}
<div class="contenedor_1">
    <div class="slide_1">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">

                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/carousel/tatoo_1.jpg') }}" class="d-block w-100" alt="car_1" height="600">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/carousel/tatoo_2.jpg') }}" class="d-block w-100" alt="car_2" height="600">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/carousel/tatoo_3.jpg') }}" class="d-block w-100" alt="car_3" height="600">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h5 class="titulo_1"><strong>ALMA NEGRA</strong></h5>
        <div class="nav_1">
            <nav class="nav_2">
                <ul class="ul_1">
                    <li class="li_1"><a class="a_1" href="{{ route('home') }}"><strong>Inicio</strong></a></li>
                    <li class="li_1"><a class="a_1" href="{{ route('posts.index')}}"><strong>Tatoos</strong></a></li>
                    <li class="li_1"><a class="a_1" href="{{ route('about')}}"><strong>Blog</strong></a></li>
                    <li class="li_1"><a class="a_1" href="{{ route('contact')}}"><strong>Contacto</strong></a></li>
                    @guest
                        <li class="li_1"><a class="a_1" href="{{ route('register')}}"><strong>Crear cuenta</strong></a></li>
                        <li class="li_1"><a class="a_1" href="{{ route('login')}}"><strong>Iniciar sesion</strong></a></li>
                    @endguest
                    @auth
                        <li class="li_1"><a href="#" class="a_1" ><strong>{{ Auth::user()->name }}</strong></a></li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="salir"><strong>Logout</strong></button>
                            {{--  <a class="nav-link active" aria-current="page" href="#"
                            onclick="this.closest('form').submit()"> Logout
                            </a>  --}}
                        </form>
                    @endauth
                </ul>
            </nav>
        </div>
    </div>
</div>


