<x-layouts.app title="Crear una cita" meta-description="Formulario para crear un nuevo blig post">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 sm-8 align-self-center text-center">
                <h1 class="mt-5"><strong>Cita de: {{ $cita->name }}</strong></h1>
                <img src="{{ asset($cita->tatoos) }}" alt="" width="auto" height="auto">
            <div class="col text-start">
                <h3>{{ $cita->descripcion }}</h3>
                <h3 class="text-primary">{{ $cita->tel }}</h3>
                <h3 >{{ $cita->email }}</h3>
                <h3 class="text-success">{{ $cita->updated_at }}</h3>
            </div>
            <div class="col">
                <a class="btn btn-outline-primary mt-5" href="{{ route('citas.citas') }}">Regresar a citas</a>
            </div>
            </div>
        </div>
    </div>


</x-layouts.app>
