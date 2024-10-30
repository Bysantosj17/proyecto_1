<x-layouts.app title="Blog" meta-description="Blog meta description">

    <div class="container">
        <div class="eow">
            <div class="col">
                <div class="col mt-5">
                    <h1>
                        <center><strong>Tatoos</strong></center>
                    </h1>
                    <div class="col text-end mb-2">
                        @auth
                            <a class="btn btn-info text-light" href="{{ route('posts.create') }}">Crear nuevo post</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="galeria" class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="{{ route('posts.show', $post) }}">
                        <img src="{{asset($post->tatoos)}}" alt="">
                    </a>
                    <h5 class="mt-2">
                        <a href="{{ route('posts.show', $post) }}">
                            {{ $post->title }}
                        </a>
                    </h5>
                    <p class="mt-2">
                        {{ $post->body }}
                    </p>
                    @auth
                        <div class="mt-2">
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-primary" href="{{ route('posts.edit', $post) }}">Editar</a>
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </div>
                    @endauth
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
