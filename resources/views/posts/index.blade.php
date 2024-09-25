<x-layouts.app title="Blog" meta-description="Blog meta description">

    <h1><strong>Blog</strong></h1>
    @auth
        <a href="{{ route('posts.create') }}">Crear nuevo post</a>
    @endauth

    @foreach ($posts as $post)
        {{--  <h2>@dump($post)</h2>  --}}
        <div class="card text-bg-dark mb-3 text-primary" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body text-primary">
                        <h5 class="card-title">
                            <a href="{{ route('posts.show', $post) }}">
                                {{ $post->title }}
                            </a>
                        </h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                        @auth
                            <div>
                                <a href="{{ route('posts.edit', $post) }}">Editar</a><br> <br> <br>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Eliminar</button>
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</x-layouts.app>
