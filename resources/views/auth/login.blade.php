<x-layouts.app title="Login" meta-description="Contact meta description">
    <center>
        <h1 class="text-primary text-center">Login</h1>
    </center>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <br><br>
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
            <br><br>
            <label>
                <input name="remember" type="checkbox">
                <span>
                    Recuerdame <br> <br>
                </span>
            </label>
        </div>

        <br>

        <button type="submit">Login</button>&nbsp;&nbsp;&nbsp;

        <a href="{{ route('register') }}">Registar</a>

    </form>

</x-layouts.app>
