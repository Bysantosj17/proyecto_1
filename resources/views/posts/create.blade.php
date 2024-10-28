<x-layouts.app
    title="Crear nuevo post"
    meta-description="Formulario para crear un nuevo blig post"
>
    <h1>Crear nuevo post</h1>
    {{--  @dump($post->toArray())  --}}
    {{--  @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach  --}}
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('posts.form-fields')

        <br>

        <button type="submit">Enviar</button>

    </form>

    <br>

    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
