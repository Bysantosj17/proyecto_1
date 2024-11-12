<x-layouts.app title="Citas" meta-description="About meta description">

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-5">Citas</h1>
                <table class="table table-hover">
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
                                    <td><p>{{ $cita->tel }}</p></td>
                                    <td><p>{{ $cita->email }}</p></td>
                                    <td><p>{{ $cita->descripcion }}</p></td>
                                    <td>
                                        <img src="{{ asset($cita->tatoos) }}" alt="" width="auto" height="100px">
                                    </td>
                                    <td><p>{{ $cita->updated_at }}</p></td>
                                    <form action="">
                                        <td>
                                            <button class="btn btn-danger" href="">Eliminar</button>
                                        </td>
                                        <td><a class="btn btn-success" href="#">Editar</a></td>
                                    </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-outline-primary" href="{{ route('cita.crear_cita') }}">Crear una cita</a>
    </div>


</x-layouts.app>
