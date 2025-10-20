<x-layouts.app title="Register" meta-description="Contact meta description">

    <div class="container-lg mt-5">

        <div class="row justify-content-center">
            <h1 class="text-primary text-center mt-2 mb-5">Registrar</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6 text-center">
                        <label>
                            <span>
                                <p class="text-start">Nombre del usuario: </p>
                            </span>
                            <input name="name"  class="" type="text" value="{{ old('name') }}" autofocus="autofocus">
                            @error('name')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </label>
                    </div>

                    <div class="col-6 text-center">
                        <label>
                            <span>
                                <p class="text-start">Email:</p>
                            </span>
                            <input name="email" class="mb-4" type="email" value="{{ old('email') }}">
                            @error('email')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </label>
                    </div>
                </div>

                <div class="col text-center">
                    <label>
                        <span>
                            <p class="text-start">Contraseña:</p>
                        </span>
                        <input name="password" class="mb-4 me-sm-5"  type="password" value="{{ old('password') }}">
                        <br>
                        @error('password')
                            <small style="color: red">{{ $message }}</small>
                        @enderror
                    </label>
                </div>

                <div class="col text-center">
                    <label>
                        <span>
                            <p class="text-start">Confirmar contraseña:</p>
                        </span>
                        <input name="password_confirmation" class="mb-sm-4" type="password" value="{{ old('password_confirmation') }}">
                        <br>
                        @error('password_confirmation')
                            <small style="color: red">{{ $message }}</small>
                        @enderror
                    </label>
                </div>

                <div class="col-8 text-center ms-4">
                    <label class="mt-4">
                        Tipo de usuario: <br> <br>
                        <select name="roles_id">
                            <option>
                                -Seleccion-
                            </option>
                            <option value="1">
                                administrador
                            </option>
                            <option value="2">
                                cliente
                            </option>
                        </select>
                    </label>
                </div>

                <div class="col-8 text-center mt-4 ms-5">
                    <button class="btn btn-success ms-5" type="submit" id="btn_guardar" >Register</button>

                    <a class="btn btn-outline-primary ms-5" href="{{ route('login') }}">login</a>
                </div>
            </form>
        </div>
    </div>

</x-layouts.app>
