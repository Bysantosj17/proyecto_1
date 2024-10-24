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

    <x-layouts.carusel/>

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
                <iframe width="100%" height="600xp" src="https://www.youtube.com/embed/ot5_z9Ri1-c" title="Aprender a tatuar desde 0 | Capítulo 3 | Sombreados, tinta blanca y más!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1868.1441718520332!2d-104.03574712169903!3d20.535379908780314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8426763e984bc339%3A0x5bf9143955371754!2sSan%20Isidro%2019%2C%20San%20Isidro%2C%2046640%20Ameca%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1729609405328!5m2!1ses-419!2smx" width="100%" height="500xp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

</x-layouts.app>
