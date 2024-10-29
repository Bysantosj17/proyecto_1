<x-layouts.app
    :title="$post->title"
    :meta-description="$post->body"
>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-ms-6 col-6">
                <h1><center>{{ $post->title }}</center></h1>
                <img src="{{$post->tatoos}}" class="img-fluid mt-5" style="width: auto" alt="">
                <p class="mt-5 h4">
                    {{ $post->body }}
                </p>
                <br>
                <a class="btn btn-outline-primary mb-5" href="{{ route('posts.index') }} ">Regresar</a>
            </div>
        </div>
    </div>
</x-layouts.app>
