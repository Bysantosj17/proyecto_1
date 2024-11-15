<x-layouts.app title="Citas" meta-description="About meta description">

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-5 mb-5">Citas</h1>
                <h4> <a href="" class="btn btn-success">Calendario</a></h4>
                <table class="table table-hover mt-5">
                    <thead>
                        <tr>
                            <th>Nombre:</th>
                            <th>Telefono:</th>
                            <th>Correo electronico:</th>
                            <th>Descripcion:</th>
                            <th>Tatuaje:</th>
                            <th>Dia de la cita:</th>
                    </thead>
                    <tbody>
                        @foreach ($citas as $cita)
                            <tr class="align-middle">
                                    <td><a class="nav-link" href="{{ route('cita.show_t' , $cita) }}">{{ $cita->name }}</a></td>
                                    <td><a class="nav-link" href="{{ route('cita.show_t' , $cita) }}">{{ $cita->tel }}</a></td>
                                    <td><a class="nav-link" href="{{ route('cita.show_t' , $cita) }}">{{ $cita->email }}</a></td>
                                    <td><a class="nav-link" href="{{ route('cita.show_t' , $cita) }}">{{ $cita->descripcion }}</a></td>
                                    <td><a href="{{ route('cita.show_t' , $cita) }}"><img src="{{ asset($cita->tatoos) }}" alt="" width="auto" height="100px"></a></td>
                                    <td><a class="nav-link" href="{{ route('cita.show_t' , $cita) }}">{{ $cita->updated_at }}</a></td>
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
        <a class="btn btn-outline-primary mt-5 mb-5" href="{{ route('cita.crear_cita') }}">Crear una cita</a>
    </div>
</x-layouts.app>
