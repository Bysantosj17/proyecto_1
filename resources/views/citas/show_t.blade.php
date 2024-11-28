<x-layouts.app title="Crear una cita" meta-description="Formulario para crear un nuevo blig post">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 sm-8 align-self-center text-center">
                <h1 class="mt-5 mb-5"><strong>Cita de: {{ $cita->name }}</strong></h1>
                <img class="mb-4 img-fluid" src="{{ asset($cita->tatoos) }}" alt="" width="auto" height="auto">
            <div class="col text-start">
                <h3>{{ $cita->descripcion }}</h3>
                <h3 class="text-primary">{{ $cita->tel }}</h3>
                <h3>{{ $cita->email }}</h3>
                <h3 class="text-success">{{ $cita->inicio}} {{ $cita->hora_reserva }}</h3>
                <h3>Baner:</h3>
                <div style="background-color: {{ $cita->color }}; height:10px;">
                </div>
            </div>

            <div class="col">
                @auth
                    @if((Auth::user()->roles_id == 1))
                        <a class="btn btn-outline-primary mt-5 me-5" href="{{ route('citas.citas') }}">Regresar a citas</a>
                    @endif
                @endauth

                <a class="btn btn-outline-success mt-5" href="{{ route('cita.edit_t', $cita) }}">Editar</a>
            </div>
            </div>
        </div>
    </div>


</x-layouts.app>
