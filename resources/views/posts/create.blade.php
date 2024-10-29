<x-layouts.app
    title="Crear nuevo post"
    meta-description="Formulario para crear un nuevo blig post"
>
    {{--  @dump($post->toArray())  --}}
    {{--  @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach  --}}
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1><center>Crear nuevo post</center></h1>
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @include('posts.form-fields')

                    <br>

                    <button class="mt-4 mb-4 btn btn-outline-primary" type="submit">Enviar</button>

                </form>

                <a class="btn btn-primary" href="{{ route('posts.index') }}">Regresar</a>
            </div>
        </div>
    </div>
</x-layouts.app>
