<x-layouts.app
    :title="$post->title"
    :meta-description="$post->body"
>
    <h1>Editar Formulario:</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf @method('PATCH')

        @include('posts.form-fields')

        <br>

        <button type="submit">Enviar</button>

    </form>
    <br>
    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
