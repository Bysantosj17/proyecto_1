<div class="col-sm-12 ms-sm-2 text-sm-center">
    <label class="mt-5">
        <p class="text-start" >Nombres:</p>
        <input class="mb-4 mt-2" type="text" name="name" value="{{ Auth::user()->name }}">
        @error('name')
            <small style="color: red">{{ $message }}</small>
        @enderror
    </label>
    <label class="ms-sm-5">
        <p class="text-start">Descripcion:</p>
        <input class="mt-2 mb-0" type="text" name="descripcion" value="{{ old('name', $cita->descripcion) }}">
        @error('descripcion')
            <small style="color: red">{{ $message }}</small>
        @enderror
    </label>
</div>
<div class="col-sm-12 ms-sm-2 text-sm-center mb-2">
    <label class="mt-5">
        <p class="text-start">Numero de telefono:</p>
        <input class="mb-4 mt-2" type="tel" name="tel" value="{{ old('tel', $cita->tel) }}">
        @error('tel')
            <small style="color: red">{{ $message }}</small>
        @enderror
    </label>
    <label class="ms-sm-5">
        <p class="text-start">Correo electronico:</p>
        <input class="mt-2" type="email" name="email" value="{{ Auth::user()->email }}">

        @error('email')
            <small style="color: red">{{ $message }}</small>
        @enderror

    </label>
</div>

<div class="col-sm-12 ms-sm-2 text-sm-center mb-2">
    <label class="me-sm-5 me-3">
        <p class="text-start mt-2">Fecha</p>
        <input type="date" class="form-control mt-4" id="fecha_reserva" value="<?php echo date('Y-m-d');?>" name="fecha_reserva">
    </label>

    <label class="me-sm-4 me-3">
        <p class="text-start mt-2">Hora</p>
        <input type="time" class="form-control" name="hora_reserva" id="hora_reservada">
    </label>

    <label class="ms-sm-1 me-sm-2">
        <p class="mt-2">Color:</p>
        <input type="color" name="color" class="form-control">
    </label>
</div>

<div class="col-12 text-sm-center">
    <label class="mt-4 me-5 pe-3">
        <p class="text-start">Tatuaje:</p>
        <input class="form-control mb-4" type="file" accept="image/*" name="tatoos" value="{{ old('tatoos', $cita->tatoos) }}">

        <img class="img-fluid" src="{{ asset($cita->tatoos) }}" alt="">

        @error('tatoos')
            <small style="color: red">{{ $message }}</small>
        @enderror
    </label>
</div>

<label>
    <input type="hidden" name="users_id" value="{{  Auth::user()->id }}">
</label>
