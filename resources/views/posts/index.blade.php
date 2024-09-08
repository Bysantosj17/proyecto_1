<x-layouts.app
    title="Blog"
    meta-description="Blog meta description"
>

    <h1><strong>Blog</strong></h1>
    <a href="{{ route('posts.create') }}">Crear nuevo post</a>
    @foreach ($posts as $post)
        {{--  <h2>@dump($post)</h2>  --}}
        <div style="display: flex; align-items: baseline">
            <h2>
                <a href="{{ route('posts.show',$post) }}">
                    {{ $post->title }}
                </a>
            </h2> &nbsp; &nbsp; &nbsp;
            <a href="{{ route('posts.edit', $post) }}">Editar</a> &nbsp; &nbsp;
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </div>

    @endforeach
</x-layouts.app>
