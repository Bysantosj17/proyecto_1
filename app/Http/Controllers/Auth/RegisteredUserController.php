<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'roles_id' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'roles_id' => $request->roles_id,
            'password' => bcrypt($request->password),
        ]);

        // Auth::login($user);

        return to_route('login')->with('status', 'La cuenta fue creada con exito');
    }
}
