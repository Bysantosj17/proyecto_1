<x-layouts.app
    title="Crear una cita"
    meta-description="Formulario para crear un nuevo blig post"
>

<div class="container">
    <div class="row">
            <h1 class="mt-5 text-center"><strong>CREAR CITA</strong></h1>
            <form action="{{ route('citas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    @include('citas.form-cita')

                    <div class="col-12 col-sm-8 text-start text-sm-center">
                        <button class="btn btn-primary mt-2 me-5 me-sm-2" type="submit"> Registrar cita</button>
                        <a class="btn btn-outline-primary mt-2 ms-5"  href="{{ route('citas.citas') }}">Regresar a citas</a>
                    </div>
                </div>

                </div>
            </form>
        </div>
    </div>
</div>


</x-layouts.app>
