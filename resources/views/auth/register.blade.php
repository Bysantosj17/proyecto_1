<x-layouts.app title="Register" meta-description="Contact meta description">

    <div class="container mt-5">
        <button class="btn btn-primary" id="btn">
            guardar
        </button>

        <div class="row justify-content-center">
            <h1 class="text-primary text-center mt-2 mb-5">Registrar</h1>
            <div class="col-4">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="col-12">
                        <label>
                            <span>
                                Nombre del usuario: <br> <br>
                            </span>
                            <input name="name" type="text" value="{{ old('name') }}" autofocus="autofocus">
                            @error('name')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </label>
                        <label>
                            <span>
                                Email: <br> <br>
                            </span>
                            <input name="email" type="email" value="{{ old('email') }}">
                            @error('email')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </label>
                    </div>

                    <label>
                        <span>
                            Contraseña: <br> <br>
                        </span>
                        <input name="password" type="password" value="{{ old('password') }}">
                        <br>
                        @error('password')
                            <small style="color: red">{{ $message }}</small>
                        @enderror
                    </label>

                    <label>
                        <span>
                            Confirmar contraseña: <br> <br>
                        </span>
                        <input name="password_confirmation" type="password" value="{{ old('password_confirmation') }}">
                        <br>
                        @error('password_confirmation')
                            <small style="color: red">{{ $message }}</small>
                        @enderror
                    </label>


                            <label>
                                Tipo de usuario:
                                <br><br>
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


                    <br> <br>

                    <button class="btn btn-success" type="submit" id="btn_guardar" >Register</button>&nbsp;&nbsp;&nbsp;

                    <a class="btn btn-outline-primary" href="{{ route('login') }}">login</a>

                </form>
            </div>
        </div>
    </div>

</x-layouts.app>
