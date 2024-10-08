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

    <div class="cont-p">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-10 col-sm-5 col-dm-6">
                    <img src="{{ asset('img/portadas/logo_1.jpg') }}" class="card-img-bottom" alt="logo_1">
            </div>
            <div class="col-sm-5 col-dm-5">
                <h5><strong>Alma negra</strong></h5>
                <p>
                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500
                    <br> <br>
                    cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó
                    una galería de textos y los mezcló de tal manera que logró hacer un libro de textos
                    especimen. <br> <br>
                    No sólo sobrevivió 500 años, sino que tambien ingresó como texto de
                    relleno en documentos electrónicos, quedando esencialmente igual al original.
                    Fue popularizado en los 60s con la creación de las hojas "Letraset"W
            </div>
        </div>
    </div>



</x-layouts.app>
