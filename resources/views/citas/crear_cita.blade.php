<x-layouts.app
    title="Crear una cita"
    meta-description="Formulario para crear un nuevo blig post"
>

<div class="container">
    <div class="row justify-content-center text-start text-sm-center">
        <div class="col-12 align-self-center">
            <h1 class="mt-5"><strong>CREAR CITA</strong></h1>
            <form action="{{ route('citas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @include('citas.form-cita')

                <br>

                <div class="col-9 justify-content-start">
                    <button class="btn btn-primary mt-5" type="submit"> Registrar cita</button> <br>
                    <a class="btn btn-outline-primary mt-5"  href="{{ route('citas.citas') }}">Regresar a citas</a>
                </div>
            </form>
        </div>
    </div>
</div>


</x-layouts.app>
