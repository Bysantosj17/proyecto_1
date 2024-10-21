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

    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-12 col-md-6">
                <h1><strong>Alma negra</strong></h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Quibusdam fugit eaque iure. Natus unde voluptatibus neque nesciunt
                    iusto ipsum fugiat, dignissimos veritatis suscipit, facere
                    laboriosam totam, adipisci eveniet quae vel
                </p>

                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Quibusdam fugit eaque iure. Natus unde voluptatibus neque nesciunt
                    iusto ipsum fugiat, dignissimos veritatis suscipit, facere
                    laboriosam totam, adipisci eveniet quae vel
                </p>

                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Quibusdam fugit eaque iure.
                </p>
            </div>
            <div class="col-12 col-md-6  align-self-center">
                <center>
                    <img class="img-fluid" src="{{ asset('img/portadas/logo_1.jpg') }}" alt="logo_1" >
                </center>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <iframe width="100%" height="400xp" src="https://www.youtube.com/embed/ot5_z9Ri1-c" title="Aprender a tatuar desde 0 | Capítulo 3 | Sombreados, tinta blanca y más!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>

</x-layouts.app>
