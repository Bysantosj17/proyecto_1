<label class="mt-5">
    <p class="text-start" >Nombres:</p>
    <input class="mb-4 mb-sm-0" type="text" name="name" value="{{old('title', $cita->name)}}">
    @error('name')
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>
<label class="mt-sm-4 ms-sm-5">
    <p class="text-start">Descripcion:</p>
    <input class="mb-4 mb-sm-0" type="text" name="descripcion" value="{{ old('name', $cita->descripcion) }}">
    @error('descripcion')
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>
<br>
<label>
    <p class="text-start">Numero de telefono:</p>
    <input class="mb-4 mb-sm-0" type="tel" name="tel" value="{{ old('tel', $cita->tel) }}"> <br> <br>
    @error('tel')
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>

<label class="mt-sm-4 ms-sm-5">
    <p class="text-start">Correo electronico:</p>
    <input class="mb-4 mb-sm-0" type="email" name="email" value="{{ old('email', $cita->email) }}">
</label>
<br>
<label class="ms-sm-5 mt-4">
    <p class="text-start">Tatuaje:</p>
    <input class="form-control mb-4" type="file" accept="image/*" name="tatoos" value="{{ old('tatoos', $cita->tatoos) }}">

    <img class="img-fluid" src="{{ asset($cita->tatoos) }}" alt="">
</label>
