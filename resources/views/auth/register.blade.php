<x-layouts.app title="Register" meta-description="Contact meta description">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <h1 class="text-primary text-center mt-2 mb-5">Registrar</h1>
            <div class="col-4">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div>
                        <label>
                            <span>
                                Nombre del usuario: <br> <br>
                            </span>
                            <input name="name" type="text" value="{{ old('name') }}" autofocus="autofocus">
                            <br>
                            @error('name')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </label>
                        <label>
                            <span>
                                Email: <br> <br>
                            </span>
                            <input name="email" type="email" value="{{ old('email') }}">
                            <br>
                            @error('email')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </label>

                        <br><br>

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
                    </div>

                    <br>

                    @auth
                        @if (Auth::user()->roles_id == 1)
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
                        @endif
                    @endauth

                    <br> <br>

                    <button class="btn btn-success" type="submit">Register</button>&nbsp;&nbsp;&nbsp;

                    <a class="btn btn-outline-primary" href="{{ route('login') }}">login</a>

                </form>
            </div>
        </div>
    </div>

</x-layouts.app>
