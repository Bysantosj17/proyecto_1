{{--  @component('components.layout')  --}}
{{--  <h1><strong>Inicio</strong></h1>  --}}
{{--  @endcomponent  --}}
{{--  <x-slot name="title">
    Home Title
    <p>hola</p>
</x-slot>  --}}
<x-layouts.app title="Home" meta-description="Home meta description">
    @auth
        <div class="text-white"> Usuario autenticado:
            {{ Auth::user()->name }}
        </div>
    @endauth

    </div>
        <div class="col-3">
            <h1><strong>Alma negra</strong></h1>
            <p>
                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500
                , cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó
                una galería de textos y los mezcló de tal manera que logró hacer un libro de textos
                especimen. <br> <br>
                No sólo sobrevivió 500 años, sino que tambien ingresó como texto de
                relleno en documentos electrónicos, quedando esencialmente igual al original.
                Fue popularizado en los 60s con la creación de las hojas "Letraset". <br> <br>las cuales
                contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición,
                como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
            </p>
        </div>
        <div class="col-12">
            <img src="{{ asset('img/portadas/logo_1.jpg') }}" class="card-img-bottom" alt="logo_1">
        </div>
    </div>

    <div class="logo_1">
        <div class="card text-bg-dark mb-3">
            <div class="card-body">
                <h5 class="card-title"><strong>Alma negra</strong></h5>

                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>

        </div>
    </div>


</x-layouts.app>
