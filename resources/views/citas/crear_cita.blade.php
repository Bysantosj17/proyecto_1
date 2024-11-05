<x-layouts.app
    title="Crear una cita"
    meta-description="Formulario para crear un nuevo blig post"
>

<div class="container-sm">
    <div class="row text-start">
        <div class="col">
            <h1 class="text-center mt-5">Crear cita</h1>
            <form action="" enctype="multipart/form-data">
                @csrf @method('PATCH')

                @include('citas.form-cita')

            </form>
        </div>
    </div>
</div>


</x-layouts.app>
