<x-layouts.app
    :title="$post->title" 
    :meta-description="$post->body"
>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1><center><strong>Editar Formulario:</strong></center></h1>
                <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PATCH')

                    @include('posts.form-fields')

                    <br>

                    <button class="btn btn-outline-primary" type="submit">Enviar</button>
                    <a class="btn btn-primary ms-5" href="{{ route('posts.index') }}">Regresar</a>
                </form>

            </div>
        </div>
    </div>
</x-layouts.app>
