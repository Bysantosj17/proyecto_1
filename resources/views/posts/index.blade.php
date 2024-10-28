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

    {{-- <div class="container-fluid">
        @foreach ($posts as $post)
            <div class="card text-bg-dark mb-3 text-primary" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/iconos/facebook.png') }}" class="img-fluid rounded-start"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-primary">
                            <h5 class="card-title">
                                <a href="{{ route('posts.show', $post) }}">
                                    {{ $post->title }}
                                </a>
                            </h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
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
    </div> --}}
    <div class="container mb-5">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col p-4">
                    <div class="card">
                        <img src="{{ asset('img/tatoos/tatoo_1.jpg') }}" class="card-img-top img-fluid" alt="..." height="50%">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('posts.show', $post) }}">
                                    {{ $post->title }}
                                </a>
                            </h5>
                            <p class="card-text">
                                This is a longer card with supporting
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


</x-layouts.app>
