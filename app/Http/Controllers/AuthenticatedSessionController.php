<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\users;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Exception;
use Illuminate\Validation\ValidationException as ValidationValidationException;
use Illuminate\Validation\Validator;
use PharIo\Manifest\Author;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {

        $credentiales = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::attempt($credentiales, $request->boolean('remember'))) {
            //login success
            throw ValidationValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }
        //login fail
        $request->session()->regenerate();

        return redirect()->intended()
            ->with('status', 'You are logged in');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login')
            ->with('status', 'You are logged out!');
    }

    public function perfil(users $users, Cita $citas)
    {

        $citas = Cita::find($users);


        return view('auth.perfil', ['users' => $users], ['citas' => $citas]);
    }
}
