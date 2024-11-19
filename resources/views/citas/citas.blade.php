<x-layouts.app title="Citas" meta-description="About meta description">

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-5 mb-5">Citas proximas</h1>
                <a class="btn btn-primary mb-2" href="{{ route('cita.crear_cita') }}">Crear una cita</a>
                <table class="table table-fluid mt-5  mb-5">
                    <thead>
                        <tr>
                            <th>Nombre:</th>
                            <th>Telefono:</th>
                            <th>Correo electronico:</th>
                            <th>Descripcion:</th>
                            <th>Dia de la cita:</th>
                            <th>Hora de cita:</th>
                            <th>Tatuaje:</th>
                    </thead>
                    <tbody>
                        @foreach ($citas as $cita)
                            <tr class="align-middle">
                                    <td><a class="nav-link" href="{{ route('cita.show_t' , $cita) }}">{{ $cita->name }}</a></td>
                                    <td><a class="nav-link" href="{{ route('cita.show_t' , $cita) }}">{{ $cita->tel }}</a></td>
                                    <td><a class="nav-link" href="{{ route('cita.show_t' , $cita) }}">{{ $cita->email }}</a></td>
                                    <td><a class="nav-link" href="{{ route('cita.show_t' , $cita) }}">{{ $cita->descripcion }}</a></td>
                                    <td><a class="nav-link" href="{{ route('cita.show_t' , $cita) }}">{{ $cita->inicio }}</a></td>
                                    <td><a class="nav-link" href="{{ route('cita.show_t' , $cita) }}">{{ $cita->hora_reserva }}</a></td>
                                    <td>
                                        <a class="nav-link" href="{{ route('cita.show_t' , $cita) }}">
                                            <img src="{{ asset($cita->tatoos) }}" alt="" width="auto" height="100px">
                                        </a>
                                    </td>
                                    <form action="{{ route('cita.destroy_t', $cita) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <td>
                                            <button class="btn btn-danger" href="">Eliminar</button>
                                        </td>
                                        <td><a class="btn btn-success" href="{{ route('cita.edit_t', $cita) }}">Editar</a></td>
                                    </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col text-center">
                <h1>Calendario</h1>
                <div class="card-body">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale:'es',
                events: [
                    @foreach ($citas as $cita)
                        {
                            title: '{{ $cita->hora_reserva }} Tatuaje de: {{ $cita->name }}',
                            start: '{{ $cita->inicio }}',
                            end: '{{ $cita->inicio }}',
                            color: '{{ $cita->color }}',
                        },
                    @endforeach
                ]
            });
            calendar.render();
        });
    </script>
</x-layouts.app>
