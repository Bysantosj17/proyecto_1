<label>
    Titulo del post: <br> <br>
    <input name="title" type="text" value="{{old('title', $post->title)}}">
    <br>
    @error('title')
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>

<br> <br>

<label>
    Cuerpo del post: <br> <br>
    <textarea name="body">{{old('body', $post->body)}}</textarea>
    <br>
    @error('body')
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>

<br> <br>

<label>
    Subir imagen: <br>
    <input type="file" name="tatoos" accept="image/*" class="mt-4 mb-4">
    @error('tatoos')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</label>

