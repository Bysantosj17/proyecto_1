<label>
    <p class="mt-4">Titulo del post:</p>
    <input name="title" type="text" value="{{old('title', $post->title)}}">
    <br>
    @error('title')
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>

<label class="ms-5">
    <p class="mt-4">Cuerpo del post:</p>
    <textarea name="body">{{old('body', $post->body)}}</textarea>
    <br>
    @error('body')
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>

<br> <br>

<label>
    Subir imagen: <br>
    <input type="file" name="tatoos" accept="image/*" class="mt-4 mb-4 form-control" value="{{ old('tatoos', $post->tatoos) }}">
    <br>
    <img class="img-fluid mb-5" src="{{ asset($post->tatoos) }}" width="600px" height="100px">

    @error('tatoos')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</label>

