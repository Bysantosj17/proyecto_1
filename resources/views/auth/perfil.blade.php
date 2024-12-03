<x-layouts.app title="Perfil" meta-description="Perfil del usuario">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col text-center mt-5 mb-5">
                <h1>Perfil de {{ $users->name }}</h1>
                <p>Correo electronico {{ $users->email }}</p>
                @if($citas->isEmpty())
                    <p>No tienes citas agendadas.</p>
                @else
                    <ul>
                        @foreach ($citas as $cita)
                                <div class="card">
                                    Fecha: {{ $cita->inicio }} <br>

                                    Descripcion: <br>

                                    <img class="text-center" src="{{asset( $cita->tatoos) }}" width="100px">
                                </div>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>


</x-layouts.app>
