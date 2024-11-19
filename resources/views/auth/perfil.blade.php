<x-layouts.app title="Perfil" meta-description="Perfil del usuario">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col text-center mt-5 mb-5">
                <h1>{{$users->name}}</h1>
                <h1>{{$users->email}}</h1>
            </div>
        </div>
    </div>


</x-layouts.app>
