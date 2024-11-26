<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Cita;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\RedirectResponse as HttpFoundationRedirectResponse;

/**
 * Create a new blog post.
 *
 * @throws \Illuminate\Auth\Access\AuthorizationException
 */

class CitaController extends Controller
{

    public function index_t()
    {
        $citas = Cita::paginate(10);

        return view('citas.citas', ['citas' => $citas]);
    }

    public function crear_cita(Cita $cita)
    {
        return view('citas.crear_cita', ['cita' => new Cita]);
    }

    public function store(StoreRequest $request, User $users)
    {
        $cita = new Cita();

        // $request->validate([
        //     'tatoos' => 'required|image',
        //     'tel' => ['required', 'max:10', "unique:citas,tel, {$cita->id}" ] ,
        //     'email' => ['required', "unique:citas,email, {$cita->id}"],
        //     'name' => 'required',
        // ]);

        $tatoos = $request->file('tatoos')->store('public/tatoos/citas');

        $url = Storage::url($tatoos);

        $cita->name = $request->input('name');
        $cita->hora_reserva = $request->input('hora_reserva');
        $cita->descripcion = $request->input('descripcion');
        $cita->tel = $request->input('tel');
        $cita->color = $request->input('color');
        $cita->users_id = $request->input('users_id');
        $cita->inicio = $request->input('fecha_reserva');
        $cita->final = $request->input('fecha_reserva');
        $cita->tatoos = $url;
        $cita->save();

        return to_route('citas.citas', ['users' => $users])->with('status', '¡Cita creada exitosamente!');
    }

    public function show_t(Cita $cita)
    {
        return view('citas.show_t', ['cita' => $cita]);
    }

    public function edit_t(Cita $cita)
    {
        return view('citas.edit_t', ['cita' => $cita]);
    }

    public function update_t(Request $request, Cita $cita)
    {
        $request->validate([
            'tatoos' => 'required|image',
            'tel' => 'required|max:10'
        ]);

        $tatoos = $request->file('tatoos')->store('public/tatoos/citas');

        $url = Storage::url($tatoos);

        $cita->name = $request->input('name');
        $cita->descripcion = $request->input('descripcion');
        $cita->tel = $request->input('tel');
        $cita->color = $request->input('color');
        $cita->inicio = $request->input('fecha_reserva');
        $cita->final = $request->input('fecha_reserva');
        $cita->tatoos = $url;
        $cita->update();

        session()->flash('status', 'cita actualizada');

        return to_route('cita.show_t', $cita)->with('status', '¡Cita acrualizada!');
    }

    public function destroy_t(Cita $cita)
    {
        $cita->delete();

        return to_route('citas.citas')->with('status', 'Cita eliminada!');
    }
}
