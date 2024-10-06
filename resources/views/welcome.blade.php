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
    <div class="text_1">
        <h4>Alma negra</h4>
        <p>
            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
            Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500
            , cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó
            una galería de textos y los mezcló de tal manera que logró hacer un libro de textos
            especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de
            relleno en documentos electrónicos, quedando esencialmente igual al original.
            Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales
            contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición,
            como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
        </p>
    </div>
    
</x-layouts.app>
